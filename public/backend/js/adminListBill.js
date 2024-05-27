function addToCart(element) {
    var toast = document.getElementById("toast");
    if (!toast) {
        toast = document.createElement("div");
        toast.id = "toast";
        toast.className = "toast";
        document.body.appendChild(toast);
    }
    toast.innerText = "Update status successfully!";
    toast.className = "toast show";
    setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);

    var selectedOption = element.options[element.selectedIndex];
    var status = selectedOption.value; // Lấy giá trị của tùy chọn

    // Change the background color of the select element to match the selected option
    element.style.backgroundColor = selectedOption.style.backgroundColor;

    // Gửi yêu cầu AJAX để cập nhật trạng thái đơn hàng
    var orderId = element.parentNode.parentNode.querySelector('.order_column').innerText;
    updateOrderStatus(orderId, status);
}

function updateOrderStatus(orderId, status) {
    // Get CSRF token
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Use AJAX to send a request to update the order status
    $.ajax({
        url: '/update-order-status/' + orderId,
        type: 'PUT',
        data: {
            status: status
        },
        headers: {
            'X-CSRF-TOKEN': token
        },
        success: function(response) {
            console.log(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

document.addEventListener('DOMContentLoaded', (event) => {
    const selectElements = document.querySelectorAll('.oho');

    selectElements.forEach((selectElement) => {
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        switch(selectedOption.value) {
            case '0': // Canceled
                selectElement.style.backgroundColor = 'rgb(231, 29, 29)';
                break;
            case '1': // Completed
                selectElement.style.backgroundColor = 'rgb(66, 151, 66)';
                break;
            default:
                selectElement.style.backgroundColor = '#FBC31C';
                break;
        }
    });
});


$(document).ready(function() {
    $('.order_column').change(function() {
        var status = $(this).val();
        var id = $(this).data('id');
        var url = '';

        switch (status) {
            case '0':
                url = '/cancel-order-status/' + id;
                break;
            case '1':
                url = '/complete-order-status/' + id;
                break;
            case '2':
                url = '/delivery-order-status/' + id;
                break;
        }

        if (url) {
            $.get(url, function(data, status) {
                // Handle the response here
                console.log(data);
            });
        }
    });
});