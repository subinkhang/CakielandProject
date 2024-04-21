document.addEventListener("DOMContentLoaded", function() {
    var carousel = document.querySelector("#carouselExample");

    // Tạo hàm để tự động chạy slide sau một khoảng thời gian
    function runCarousel() {
        var carouselInstance = new bootstrap.Carousel(carousel);
        setInterval(function() {
            carouselInstance.next();
        }, 3000); // Thời gian giữa các slide là 10 giây
    }

    // Chạy hàm khi trang web đã tải hoàn toàn
    runCarousel();
});

const searchInput = document.getElementById('searchInput');
const suggestionsDiv = document.querySelector('.suggestions');

// Bắt sự kiện khi nhập vào ô tìm kiếm
searchInput.addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const suggestions = [];

    // Lấy dữ liệu gợi ý (ví dụ: từ một API hoặc mảng dữ liệu)
    const data = ['Sản phẩm 1', 'Sản phẩm 2', 'Sản phẩm 3', 'Từ khóa liên quan'];

    for (let i = 0; i < data.length; i++) {
        if (data[i].toLowerCase().includes(searchTerm)) {
            suggestions.push(data[i]);
        }
    }

    // Hiển thị hoặc ẩn div gợi ý
    if (suggestions.length > 0) {
        suggestionsDiv.style.display = 'block';
        suggestionsDiv.innerHTML = ''; // Xóa nội dung cũ

        const suggestionsList = document.createElement('ul');
        suggestions.forEach(suggestion => {
            const suggestionItem = document.createElement('li');
            suggestionItem.textContent = suggestion;
            suggestionItem.addEventListener('click', function() {
                searchInput.value = suggestion;
                suggestionsDiv.style.display = 'none';
            });
            suggestionsList.appendChild(suggestionItem);
        });
        suggestionsDiv.appendChild(suggestionsList);
    } else {
        suggestionsDiv.style.display = 'none';
    }
});

// Bắt sự kiện click bên ngoài ô tìm kiếm để ẩn danh sách gợi ý
document.addEventListener('click', function(event) {
    const clickedElement = event.target;
    if (!searchInput.contains(clickedElement)) {
        suggestionsDiv.style.display = 'none';
    }
});

function validateEmail() {
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('email-error');
    var email = emailInput.value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        emailError.style.display = 'block';
    } else {
        emailError.style.display = 'none';
        // Gửi email hoặc thực hiện các hành động khác sau khi kiểm tra email hợp lệ ở đây
    }
}