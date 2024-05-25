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

    //Add vô local Storage
    const addButtons = document.querySelectorAll('.btn_add');

    addButtons.forEach((button, index) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();

            const product = {
                id: document.querySelectorAll('.pr-i2-id')[index].innerText.trim(),
                name: document.querySelectorAll('.pr-i2-name')[index].innerText,
                description: document.querySelectorAll('.text_product')[index].innerText,
                fake_price: document.querySelectorAll('.old-price')[index].innerText,
                price: document.querySelectorAll('.new-price')[index].innerText,
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
document.addEventListener('DOMContentLoaded', function() {
    const mainMenuTitles = document.querySelectorAll('.mainmenu_title');

    mainMenuTitles.forEach(title => {
        title.addEventListener('click', function() {
            const menuCon = this.querySelector('.menucon');
            const arrow = this.querySelector('.arrow');

            if (menuCon.style.maxHeight) {
                menuCon.style.maxHeight = null;
                arrow.style.transform = 'rotate(45deg)';
            } else {
                menuCon.style.maxHeight = menuCon.scrollHeight + 'px';
                arrow.style.transform = 'rotate(-45deg)';
            }
        });
    });
});
