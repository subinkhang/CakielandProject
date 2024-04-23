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
