document.addEventListener("DOMContentLoaded", function() {
    // Lắng nghe sự kiện click vào nút "btn_add"
    var addButtonList = document.querySelectorAll('.btn_add');
    addButtonList.forEach(function(addButton) {
        addButton.addEventListener('click', function() {
            function updateCartCount() {
                // Lấy dữ liệu từ localStorage
                let products = localStorage.getItem('products');
                products = products ? JSON.parse(products) : [];

                // Tính tổng số lượng sản phẩm
                let totalQuantity = 1;
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
        });
    });

    //Add vô local Storage
    const addButtons = document.querySelectorAll('.btn_add');

    addButtons.forEach((button, index) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();

            const product = {
                id: document.querySelectorAll('.pr-i2-id')[index].innerText.trim(),
                name: document.querySelectorAll('.pr-i2-name')[index].innerText,
                image: document.querySelectorAll('.text-hidden')[index].innerText.split('/').pop(),
                fake_price: document.querySelectorAll('.old-price')[index].innerText.replace('$', ''),
                price: document.querySelectorAll('.new-price')[index].innerText.replace('$', ''),
            };

            let products = localStorage.getItem('products');
            products = products ? JSON.parse(products) : [];

            const existingProductIndex = products.findIndex(p => p.name === product.name);

            if (existingProductIndex >= 0) {
                // If product already exists in the cart, increase the quantity
                products[existingProductIndex].quantity = (products[existingProductIndex].quantity || 1) + 1;
            } else {
                // If product does not exist in the cart, add it
                product.quantity = 1;
                products.push(product);
            }

            localStorage.setItem('products', JSON.stringify(products));
        });
    });
});

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

// document.addEventListener('DOMContentLoaded', function() {
//     var select = document.getElementById('sort');
//     select.onfocus = function() {
//         this.style.boxShadow = '0 4px 8px rgba(178, 150, 99, 0.5)';
//     };
//     select.onblur = function() {
//         this.style.boxShadow = 'none';
//     };
// });

document.addEventListener('DOMContentLoaded', function() {
    var select = document.getElementById('sort');
    select.addEventListener('focus', function() {
        this.style.borderColor = '#b29663'; /* Highlight border when focused */
    });
    select.addEventListener('blur', function() {
        this.style.borderColor = '#f3e0d2'; /* Revert border color on blur */
    });
});


// document.addEventListener('DOMContentLoaded', function() {
//     const mainMenuTitles = document.querySelectorAll('.mainmenu_title');

//     mainMenuTitles.forEach(title => {
//         title.addEventListener('click', function() {
//             const menuCon = this.querySelector('.menucon');
//             const arrow = this.querySelector('.arrow');

//             if (menuCon.style.maxHeight) {
//                 menuCon.style.maxHeight = null;
//                 arrow.style.transform = 'rotate(45deg)';
//             } else {
//                 menuCon.style.maxHeight = menuCon.scrollHeight + 'px';
//                 arrow.style.transform = 'rotate(-45deg)';
//             }
//         });
//     });
// });

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

$(document).ready(function() {
    // Event listener for click on the arrow icon within category-link
    $('.mainmenu li .category-link .arrow-wrapper').on('click', function(e) {
        e.preventDefault(); // Prevent default link behavior

        // Get the li element containing the clicked arrow
        var $li = $(this).closest('li');

        // Toggle active class for the sub-menu
        $li.find('.menucon').slideToggle();

        // Toggle rotation class for the arrow icon
        $(this).find('.arrow').toggleClass('rotated');
    });

    // Prevent click event on sub-category links from closing the menu
    $('.mainmenu .menucon a').on('click', function(e) {
        e.stopPropagation();
    });
});


  $(document).ready(function() {
    // Event listener for click on the arrow icon within category-link
    $('.mainmenu li .category-link .arrow-wrapper').on('click', function(e) {
      e.preventDefault(); // Prevent default link behavior
  
      // Toggle active class for the sub-menu's parent li element
      $(this).closest('li').toggleClass('active');
    });
  
    // Prevent click event on sub-category links from closing the menu
    $('.mainmenu .menucon a').on('click', function(e) {
      e.stopPropagation();
    });
  });