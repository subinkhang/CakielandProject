const express = require('express');
const multer = require('multer');
const { HfInference } = require('@huggingface/inference');
const fs = require('fs');
const path = require('path');
require('dotenv').config({ path: path.resolve(__dirname, '../.env') });

const app = express();
const upload = multer({ dest: 'uploads/' });

const hf = new HfInference(process.env.HUGGINGFACE_API_TOKEN);

app.post('/search-by-image', upload.single('image'), async (req, res) => {
  try {
    if (!req.file) {
      return res.status(400).send('No image file provided');
    }

    const queryImagePath = path.join(__dirname, req.file.path);

    const getImageFeatures = async (imagePath) => {
      try {
        const image = fs.readFileSync(imagePath);
        const result = await hf.imageRecognition({ inputs: image });
        return result;
      } catch (error) {
        console.error('Error during image recognition:', error);
        throw new Error('Failed to get image features');
      }
    };

    const searchProductByImage = async (imagePath, productImages) => {
      const imageFeatures = await getImageFeatures(imagePath);

      let bestMatch = null;
      let highestSimilarity = 0;

      for (const productImage of productImages) {
        const productFeatures = await getImageFeatures(productImage);
        const similarity = calculateCosineSimilarity(imageFeatures, productFeatures);

        if (similarity > highestSimilarity) {
          highestSimilarity = similarity;
          bestMatch = path.basename(productImage); // Chỉ trả về tên ảnh
        }
      }

      return bestMatch;
    };

    const calculateCosineSimilarity = (vecA, vecB) => {
      const dotProduct = vecA.reduce((sum, a, idx) => sum + a * vecB[idx], 0);
      const normA = Math.sqrt(vecA.reduce((sum, a) => sum + a * a, 0));
      const normB = Math.sqrt(vecB.reduce((sum, b) => sum + b * b, 0));
      return dotProduct / (normA * normB);
    };

    const directoryPath = path.join('D:', 'UIT', 'Cakieland', 'public', 'public', 'testSearchImage');
    const productImages = fs.readdirSync(directoryPath).map(file => path.join(directoryPath, file));

    const bestMatch = await searchProductByImage(queryImagePath, productImages);
    res.json({ best_match: bestMatch });
  } catch (error) {
    console.error('Error during image search:', error);
    res.status(500).send('Internal server error');
  }
});

app.listen(8000, () => {
  console.log('Server is running on port 8000');
});
