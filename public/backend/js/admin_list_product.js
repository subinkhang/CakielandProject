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
function deleteProduct() {
    var notification = document.createElement('div');
    notification.textContent = "Product deleted";
    notification.style.backgroundColor = "#fbc31c";
    notification.style.color = "#fdfdfd";
    document.body.appendChild(notification);
    setTimeout(function() {
        notification.style.opacity = "0";
        setTimeout(function() {
            notification.parentNode.removeChild(notification);
        }, 600);
    }, 2000);
}
