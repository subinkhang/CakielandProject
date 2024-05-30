import express from 'express';
import multer from 'multer';
import axios from 'axios';
import { HfInference } from '@huggingface/inference';
import fs from 'fs';
import path from 'path';
import dotenv from 'dotenv';

dotenv.config(); 

const app = express();
const upload = multer({ dest: 'uploads/' });

const hf = new HfInference(process.env.HUGGINGFACE_API_TOKEN);
const TRANSCRIPTION_API_URL = 'https://api-inference.huggingface.co/models/openai/clip-vit-base-patch32';

app.post('/search-by-image', upload.single('image'), async (req, res) => {
  if (!req.file) {
    return res.status(400).send('No image file provided');
  }

  const queryImagePath = path.join(__dirname, req.file.path);

  // Hàm để lấy mô tả văn bản cho hình ảnh
  const getImageFeatures = async (imagePath) => {
    const image = fs.readFileSync(imagePath);
    const result = await hf.imageRecognition({ inputs: image });
    return result;
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
        bestMatch = productImage;
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

  const directoryPath = path.join('D:', 'UIT', 'Cakieland', 'public', 'public', 'backend', 'upload');
  const productImages = fs.readdirSync(directoryPath).map(file => path.join(directoryPath, file));

  const bestMatch = await searchProductByImage(queryImagePath, productImages);
  res.json({ best_match: bestMatch });
});

app.listen(8000, () => {
  console.log('Server is running on port 8000');
});
