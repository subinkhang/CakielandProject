document.addEventListener("DOMContentLoaded", function() {
    // Lắng nghe sự kiện click vào nút "btn_add"
    var addButtonList = document.querySelectorAll('.btn_add');
    addButtonList.forEach(function(addButton) {
        addButton.addEventListener('click', function() {
            // Lấy số lượng hiện tại của giỏ hàng từ phần tử trong header
            var cartItemCountElement = document.querySelector('.cart_item p');
            var currentCartItemCount = parseInt(cartItemCountElement.textContent);

            // Tăng số lượng giỏ hàng lên 1 và cập nhật lên header
            var newCartItemCount = currentCartItemCount + 1;
            cartItemCountElement.textContent = newCartItemCount;
        });
    });
});
