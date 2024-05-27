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
    // const data = ['Sản phẩm 1', 'Sản phẩm 2', 'Sản phẩm 3', 'Từ khóa liên quan'];

    // Lọc dữ liệu gợi ý
    const data = JSON.parse(localStorage.getItem('productNames'))
    console.log(data);

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

function validateAndSubmit() {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    const successMessage = document.getElementById('success-message');
    const email = emailInput.value;

    // Basic email validation
    if (!validateEmail(email)) {
        emailError.style.display = 'block';
        successMessage.style.display = 'none';
        return;
    } else {
        emailError.style.display = 'none';
    }

    // Prepare data
    const data = {
        email: email,
        _token: document.querySelector('input[name="_token"]').value,
    };

    fetch('/save-email', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': data._token,
        },
        body: JSON.stringify(data),
    })
    .then(response => {
        if (response.ok) {
            return response.json(); // Assuming your server returns a JSON response
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {
        // Clear the input field
        emailInput.value = '';
        successMessage.style.display = 'block';
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

document.addEventListener('DOMContentLoaded', function () {
    const userIcon = document.querySelector('.user_item-header .fa-user');
    const dropdown = document.querySelector('.user_item-header .dropdown-menu-right-header');

    userIcon.addEventListener('click', function () {
        dropdown.classList.toggle('show');
    });

    window.addEventListener('click', function (e) {
        if (!userIcon.contains(e.target) && !dropdown.contains(e.target)) {
            // dropdown.classList.remove('show');
        }
    });
});
