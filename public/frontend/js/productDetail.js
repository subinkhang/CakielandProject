// Đợi tất cả các phần tử HTML được tải xong
document.addEventListener("DOMContentLoaded", function() {
    // Lắng nghe sự kiện click vào nút "btn-shopnow"
    var shopNowButton = document.querySelector('.btn-shopnow');
    shopNowButton.addEventListener('click', function() {
        // Lấy số lượng sản phẩm mà người dùng đã chọn
        var selectedQuantity = parseInt(document.getElementById('pr-number').value);

        // Lấy số lượng hiện tại của giỏ hàng từ phần tử trong header
        var cartItemCountElement = document.querySelector('.cart_item p');
        var currentCartItemCount = parseInt(cartItemCountElement.textContent);

        // Tăng số lượng giỏ hàng lên theo số lượng sản phẩm mà người dùng chọn và cập nhật lên header
        var newCartItemCount = currentCartItemCount + selectedQuantity;
        cartItemCountElement.textContent = newCartItemCount;
    });
});


// // Tăng giảm số lượng
// // Đợi tất cả các phần tử HTML được tải xong
// document.addEventListener("DOMContentLoaded", function() {
//     // Lấy phần tử button với id là btn-minus
//     var minusButton = document.getElementById('btn-minus');

//     // Lắng nghe sự kiện click vào nút minus
//     minusButton.addEventListener('click', function() {
//         // Lấy phần tử input số lượng sản phẩm
//         var quantityInput = document.getElementById('pr-number');
        
//         // Lấy giá trị hiện tại của số lượng
//         var currentQuantity = parseInt(quantityInput.value);

//         // Giảm số lượng đi 1 nếu số lượng hiện tại lớn hơn 1
//         if (currentQuantity > 1) {
//             quantityInput.value = currentQuantity - 1;
//         }
//     });

//     // Lấy phần tử button với id là btn-plus
//     var plusButton = document.getElementById('btn-plus');

//     // Lắng nghe sự kiện click vào nút plus
//     plusButton.addEventListener('click', function() {
//         // Lấy phần tử input số lượng sản phẩm
//         var quantityInput = document.getElementById('pr-number');
        
//         // Lấy giá trị hiện tại của số lượng
//         var currentQuantity = parseInt(quantityInput.value);

//         // Tăng số lượng lên 1
//         quantityInput.value = currentQuantity + 1;
//     });
// });

/*----------------------------------ADD TO CART------------------------------------------*/

const addButtons = document.querySelectorAll('.btn_shop');

    addButtons.forEach((button, index) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const ids = document.querySelectorAll('.id');
        const names = document.querySelectorAll('.pr-i2-name');
        const images = document.querySelectorAll('.text-hidden');
        const descriptions = document.querySelectorAll('.text_product');
        const fakePrices = document.querySelectorAll('.old-price');
        const prices = document.querySelectorAll('.new-price');
        
        // Truy xuất thông tin của sản phẩm dựa trên chỉ số hiện tại
        const product = {
            id: ids[index].innerText.trim(),
            name: names[index].innerText,
            image: images[index].innerText.split('/').pop(),
            fake_price: fakePrices[index].innerText.replace("$", ""),
            price: prices[index].innerText.replace("$", ""),
        };

            let products = localStorage.getItem('products');
            products = products ? JSON.parse(products) : [];

            const existingProductIndex = products.findIndex(p => p.name === product.name);
            var selectedQuantity = parseInt(document.getElementById('pr-number').value);
            if (existingProductIndex >= 0) {
                products[existingProductIndex].quantity = (products[existingProductIndex].quantity || 1) + selectedQuantity;
            } else {
                // If product does not exist in the cart, add it
                product.quantity = selectedQuantity;
                products.push(product);
            }
            function updateCartCount() {
                // Lấy dữ liệu từ localStorage
                let products = localStorage.getItem('products');
                products = products ? JSON.parse(products) : [];

                // Tính tổng số lượng sản phẩm
                let totalQuantity = selectedQuantity;
                for (const product of products) {
                    if (product.quantity) {
                        totalQuantity += product.quantity;
                    }
                }

                // Gán giá trị tổng vào phần tử HTML
                const cartCountElement = document.querySelector('.cart-count-header');
                cartCountElement.innerText = totalQuantity.toString();
                console.log(totalQuantity)
            }

            // Gọi hàm updateCartCount để cập nhật giá trị ban đầu
            updateCartCount();

            localStorage.setItem('products', JSON.stringify(products));
            console.log(product);
        });
    });

/*------------------------------END ADD TO CART---------------------------------------*/

// Đợi tất cả các phần tử HTML được tải xong
document.addEventListener("DOMContentLoaded", function() {
    // Lấy phần tử button với id là btn-minus
    var minusButton = document.getElementById('btn-minus');

    // Lắng nghe sự kiện click vào nút minus
    minusButton.addEventListener('click', function() {
        // Lấy phần tử input số lượng sản phẩm
        var quantityInput = document.getElementById('pr-number');
        
        // Lấy giá trị hiện tại của số lượng
        var currentQuantity = parseInt(quantityInput.value);

        // Giảm số lượng đi 1 nếu số lượng hiện tại lớn hơn 1
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    });

    // Lấy phần tử button với id là btn-plus
    var plusButton = document.getElementById('btn-plus');

    // Lắng nghe sự kiện click vào nút plus
    plusButton.addEventListener('click', function() {
        // Lấy phần tử input số lượng sản phẩm
        var quantityInput = document.getElementById('pr-number');
        
        // Lấy giá trị hiện tại của số lượng
        var currentQuantity = parseInt(quantityInput.value);

        // Tăng số lượng lên 1
        quantityInput.value = currentQuantity + 1;
    });

    // Lấy phần tử button với class là btn-shopnow
    var shopNowButton = document.querySelector('.btn-shopnow');

    // Lắng nghe sự kiện click vào nút mua hàng
    shopNowButton.addEventListener('click', function() {
        // Đặt giá trị của số lượng sản phẩm về 1
        document.getElementById('pr-number').value = 1;
    });
});
// hiển thị thông báo add to cart thành công
function addToCart(element) {
    // Hiển thị toast message
    var toast = document.getElementById("toast");
    if (!toast) {
        toast = document.createElement("div");
        toast.id = "toast";
        toast.className = "toast";
        document.body.appendChild(toast);
    }
    toast.innerText = "Add to cart successfully!";
    toast.className = "toast show";
    setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);
}
// Cho user chọn color 
document.addEventListener("DOMContentLoaded", function() {
    var colorItems = document.querySelectorAll(".pr-color li");
    var selectedColor = null; // Biến lưu trữ màu sắc được chọn

    // Lặp qua từng phần tử trong danh sách màu và gắn sự kiện click
    colorItems.forEach(function(item, index) {
        item.addEventListener("click", function() {
            // Xóa lớp active của tất cả các phần tử màu
            colorItems.forEach(function(item) {
                item.classList.remove("active");
            });

            // Đánh dấu phần tử được click là active
            item.classList.add("active");

            // Lấy màu sắc của phần tử được click
            selectedColor = item.style.backgroundColor;
        });
    });

    // Xử lý khi người dùng thêm sản phẩm vào giỏ hàng
    var addToCartBtn = document.querySelector("#addToCartBtn");
    addToCartBtn.addEventListener("click", function() {
        // Kiểm tra xem đã chọn màu sắc chưa
        if (selectedColor) {
            // Thêm sản phẩm vào giỏ hàng với màu sắc đã chọn
            addToCart(selectedColor);
        } else {
            // Hiển thị thông báo cho người dùng chọn màu sắc trước khi thêm vào giỏ hàng
            alert("Please select a color before adding to cart.");
        }
    });

    // Hàm thêm sản phẩm vào giỏ hàng với màu sắc đã chọn
    function addToCart(color) {
        // Thực hiện các bước để thêm sản phẩm vào giỏ hàng với màu sắc đã chọn
        // Ví dụ:
        // - Tạo đối tượng sản phẩm với màu sắc
        // - Thêm sản phẩm vào giỏ hàng
        console.log("Adding product to cart with color: " + color);
    }
});
function selectColor(element) {
    // Loại bỏ class 'selected' từ tất cả các ô màu
    const colorOptions = document.querySelectorAll('.pr-color li');
    colorOptions.forEach(option => option.classList.remove('selected'));

    // Thêm class 'selected' vào ô màu được chọn
    element.classList.add('selected');
}

// function addToCart(element) {
//     // Hiển thị toast message
//     var toast = document.getElementById("toast");
//     if (!toast) {
//         toast = document.createElement("div");
//         toast.id = "toast";
//         toast.className = "toast";
//         document.body.appendChild(toast);
//     }
//     toast.innerText = "Add to cart successfully!";
//     toast.className = "toast show";
//     setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);
// }

//dấu tích cho color
document.addEventListener('DOMContentLoaded', function () {
    const colorItems = document.querySelectorAll('.color-item');

    colorItems.forEach(item => {
        item.addEventListener('click', function () {
            // Remove 'selected' class from all items
            colorItems.forEach(i => i.classList.remove('selected'));
            // Add 'selected' class to the clicked item
            this.classList.add('selected');
        });
    });
});




//tab-bar khi chọn thì đổi chữ vàng
function changeColor(tab) {
    // Loại bỏ class 'active' khỏi tất cả các tab
    var tabs = document.querySelectorAll('.custom-tab');
    tabs.forEach(function(item) {
        item.classList.remove('active');
    });

    // Thêm class 'active' vào tab được click
    tab.classList.add('active');
}


//image
// document.addEventListener('DOMContentLoaded', function () {
//     const carouselInner = document.querySelector('.carousel-inner');
//     const carouselIndicators = document.getElementById('carousel-indicators');
//     const nextButton = document.getElementById('next-slide');
//     const prevButton = document.getElementById('prev-slide');

//     function updateCarousel(index) {
//         const nextImages = [
//             galleryImages[index],
//             galleryImages[(index + 1) % galleryImages.length],
//             galleryImages[(index + 2) % galleryImages.length]
//         ];

//         // Preload images
//         const preloadImages = nextImages.map(src => {
//             const img = new Image();
//             img.src = src;
//             return img;
//         });

//         // Wait for all images to be loaded
//         Promise.all(preloadImages.map(img => new Promise(resolve => img.onload = resolve)))
//             .then(() => {
//                 // Update carousel-inner
//                 const carouselItems = carouselInner.querySelectorAll('.carousel-item');
//                 carouselItems.forEach((item, i) => {
//                     const img = item.querySelector('img');
//                     img.src = nextImages[i % nextImages.length];
//                     item.classList.toggle('active', i === 0);
//                 });

//                 // Update carousel-indicators
//                 const indicatorItems = carouselIndicators.querySelectorAll('.col-4 img');
//                 indicatorItems.forEach((item, i) => {
//                     item.src = nextImages[i % nextImages.length];
//                     item.classList.toggle('active', i === 0);
//                 });
//             });
//     }

//     nextButton.addEventListener('click', function () {
//         const activeItem = carouselInner.querySelector('.carousel-item.active img');
//         const currentIndex = galleryImages.indexOf(activeItem.src);
//         const nextIndex = (currentIndex + 1) % galleryImages.length;
//         updateCarousel(nextIndex);
//     });

//     prevButton.addEventListener('click', function () {
//         const activeItem = carouselInner.querySelector('.carousel-item.active img');
//         const currentIndex = galleryImages.indexOf(activeItem.src);
//         const prevIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
//         updateCarousel(prevIndex);
//     });
// });


document.addEventListener('DOMContentLoaded', function () {
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselIndicators = document.getElementById('carousel-indicators');
    const nextButton = document.getElementById('next-slide');
    const prevButton = document.getElementById('prev-slide');

    function updateCarousel(nextIndex) {
        const nextImages = [
            galleryImages[nextIndex],
            galleryImages[(nextIndex + 1) % galleryImages.length],
            galleryImages[(nextIndex + 2) % galleryImages.length]
        ];

        // Preload images
        const preloadImages = [];
        nextImages.forEach(image => {
            const img = new Image();
            img.src = image;
            preloadImages.push(img);
        });

        // After preloading, update the carousel
        Promise.all(preloadImages.map(image => image.onload)).then(() => {
            // Update carousel inner images
            const carouselItems = carouselInner.querySelectorAll('.carousel-item');
            carouselItems.forEach((carouselItem, index) => {
                const img = carouselItem.querySelector('img');
                img.src = nextImages[index % nextImages.length];
                if (index === 0) {
                    carouselItem.classList.add('active');
                } else {
                    carouselItem.classList.remove('active');
                }
            });

            // Update carousel indicators images
            const indicatorItems = carouselIndicators.querySelectorAll('.col-4 img');
            indicatorItems.forEach((indicatorItem, index) => {
                indicatorItem.src = nextImages[index % nextImages.length];
                indicatorItem.classList.toggle('active', index === 0);
            });
        });
    }

    nextButton.addEventListener('click', function () {
        const activeItem = carouselInner.querySelector('.carousel-item.active');
        const activeImgSrc = activeItem.querySelector('img').src;
        const currentIndex = galleryImages.indexOf(activeImgSrc);
        const nextIndex = (currentIndex + 1) % galleryImages.length;
        updateCarousel(nextIndex);
    });

    prevButton.addEventListener('click', function () {
        const activeItem = carouselInner.querySelector('.carousel-item.active');
        const activeImgSrc = activeItem.querySelector('img').src;
        const currentIndex = galleryImages.indexOf(activeImgSrc);
        const prevIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        updateCarousel(prevIndex);
    });
});







