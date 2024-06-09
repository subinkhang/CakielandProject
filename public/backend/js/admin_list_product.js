// Hiện thùng rác khi bấm vào checkbox
function toggleTrashIcon(checked) {
    var trashIcons = document.querySelectorAll('.fa-regular.fa-trash-can');

    if (checked) {
        trashIcons.forEach(function(icon) {
            icon.style.display = 'inline';
        });
    } else {
        trashIcons.forEach(function(icon) {
            icon.style.display = 'none';
        });
    }
}

// Khi bấm vào icon xóa thì hiện lên thông báo xóa thành công
function confirmDelete(event, productId) {
    if (confirm('Are you sure to delete?')) {
        // Chuyển hướng đến URL xóa sản phẩm
        window.location.href = '/delete-list-product/' + productId;
        // Gọi hàm để hiển thị toast message
        deleteProduct();
        return true; // Thực hiện chuyển hướng
    } else {
        // Ngăn chặn sự kiện click mặc định
        event.preventDefault();
        return false;
    }
}

function deleteProduct() {
    // Hiển thị toast message
    var toast = document.getElementById("toast");
    if (!toast) {
        toast = document.createElement("div");
        toast.id = "toast";
        toast.className = "toast";
        document.body.appendChild(toast);
    }
    toast.innerText = "Successfully deleted a product!";
    toast.className = "toast show";
    setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 9000);
}