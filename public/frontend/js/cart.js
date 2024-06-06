function updateCartCount() {
    // Lấy dữ liệu từ localStorage
    let products = localStorage.getItem('products');
    products = products ? JSON.parse(products) : [];

    // Tính tổng số lượng sản phẩm
    let totalQuantity = 0;
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

function decreaseQuantity(index) {
const inputElement = document.querySelector(`input[name="quan[${index}]"]`);
var currentValue = parseInt(inputElement.value);
if (currentValue > 1) {
inputElement.value = currentValue - 1;
updateLocalStorage(index, currentValue - 1);
updateCartCount();
}
var num = inputElement.value;
console.log(num);
const priceElement = document.querySelector(`h6[name="price[${index}]"]`);
const price = parseFloat(priceElement.textContent);
console.log(price);
const subtotalElement = document.getElementById(`subprice_${index}`);
console.log(subtotalElement);
const total = parseFloat(num) * parseFloat(price);
console.log(total);
subtotalElement.innerHTML = `<span>$${total.toFixed(2)}</span>`;
updateTotal();

}

function increaseQuantity(index) {
const inputElement = document.querySelector(`input[name="quan[${index}]"]`);
var currentValue = parseInt(inputElement.value);
if (!isNaN(currentValue)) {
inputElement.value = currentValue + 1;
}
var num = inputElement.value;
console.log(num);
const priceElement = document.querySelector(`h6[name="price[${index}]"]`);
const price = parseFloat(priceElement.textContent);
console.log(price);
const subtotalElement = document.getElementById(`subprice_${index}`);
console.log(subtotalElement);
const total = parseFloat(num) * parseFloat(price);
console.log(total);
subtotalElement.innerHTML = `<span>$${total.toFixed(2)}</span>`;
updateTotal();
updateLocalStorage(index, currentValue + 1);
updateCartCount();
}

function updateLocalStorage(index, quantity) {
    // Lấy dữ liệu từ localStorage
    let products = localStorage.getItem('products');
    products = products ? JSON.parse(products) : [];

    // Cập nhật số lượng sản phẩm tại vị trí index
    if (index >= 0 && index < products.length) {
        products[index].quantity = quantity;
    }

    // Lưu lại dữ liệu vào localStorage
    localStorage.setItem('products', JSON.stringify(products));
}

function updateTotal() {
const subtotalElements = document.querySelectorAll(".subprice"); // Get all elements with class 'subprice'
let total = 0;
subtotalElements.forEach((subtotalElement) => {
total += parseFloat(subtotalElement.textContent.replace("$", ""));
});
document.getElementById("rightsub").textContent = `${total.toFixed(2)}`;
const shippingPrice = parseFloat(
document.getElementById("shipping-price").textContent.replace("$", "")
);
console.log("ship", shippingPrice);
const discountPrice = parseFloat(
document.getElementById("discount-price").textContent.replace("$", "")
);
const full = total + shippingPrice - discountPrice;
const totalprice = document.getElementById("totalprice");
totalprice.innerHTML = `<span>
    <h3><b>$${full.toFixed(2)}</h3></b>
</span>`;
}

/*-------------REMOVE ITEM------------*/

function deleteItem(index) {
    
// Xóa phần tử DOM tương ứng
const inputElement = document.querySelector(`input[name="quan[${index}]"]`);
var currentValue = parseInt(inputElement.value);
console.log(currentValue)
const itemId = `item${index}`;
const rmitem = document.getElementById(itemId);
if (rmitem) {
rmitem.remove();
var toast = document.getElementById("toast");
if (!toast) {
toast = document.createElement("div");
toast.id = "toast";
toast.className = "toast";
document.body.appendChild(toast);
}
toast.innerText = "Delete item successfully!";
toast.className = "toast show";
setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);
function updateCartCount() {
    // Lấy dữ liệu từ localStorage
    let products = localStorage.getItem('products');
    products = products ? JSON.parse(products) : [];

    // Tính tổng số lượng sản phẩm
    let totalQuantity = currentValue;
    for (const product of products) {
        if (product.quantity) {
            totalQuantity = (totalQuantity - product.quantity);
        }
    }
    // Gán giá trị tổng vào phần tử HTML
    const cartCountElement = document.querySelector('.cart-count-header');
    cartCountElement.innerText = Math.abs(totalQuantity.toString());
    console.log(Math.abs(totalQuantity))
}

// Gọi hàm updateCartCount để cập nhật giá trị ban đầu
updateCartCount();
}

// Cập nhật lại mảng products trong localStorage
let products = JSON.parse(localStorage.getItem("products"));
if (products && products.length > index) {
products.splice(index, 1); // Xóa phần tử khỏi mảng
localStorage.setItem("products", JSON.stringify(products));
updateTotal();

// Cập nhật lại ID và các thuộc tính khác của các phần tử DOM còn lại
for (let i = index; i < products.length; i++) { const nextItem=document.getElementById(`item${i + 1}`); if (nextItem) {
    nextItem.id=`item${i}`; nextItem.querySelector(".removeitem").setAttribute("onclick", `deleteItem(${i})`);
    nextItem.querySelector(".price").setAttribute("name", `price[${i}]`);
    nextItem.querySelector(".subprice").id=`subprice_${i}`; nextItem.querySelector("span input").name=`quan[${i}]`;
    nextItem.querySelector(".btn-minuse").setAttribute("onclick", `decreaseQuantity(${i})`);
    nextItem.querySelector(".btn-pluss").setAttribute("onclick", `increaseQuantity(${i})`); } }
 }
 }
    /*----------------GET ITEM---------------------*/ 
    document.addEventListener("DOMContentLoaded", (event)=> {
    const products = JSON.parse(localStorage.getItem("products"));
    var table = document.getElementById("prod");
    let total = 0;
    const maxRows = 3;
    for (let i = 0; i < products.length; i++) { 
        var newRow=document.createElement("tr"); 
        newRow.classList.add('newrow');
        newRow.id=`item${i}`; 
        const subtotal=products[i].price * products[i].quantity; 
        const price=parseFloat(products[i].price); 
        console.log(price); 
        newRow.innerHTML=` <th scope="row">
        </th>
        <div style="margin-top: 180px;">
            <td class="col-2 text-center">${i + 1}</td>
            <td class="col-8">
                <div class="row pr-list-co">
                    <div class="col-4">
                        <img src="public/backend/upload/${products[i].image}" class="img-fluid">
                    </div>
                    <div class="col-8 row">
                        <h6 class="ellipsis">${products[i].name}</h6>
                        <div class="d-flex">
                            <button id="btn-minus" class="btn-minuse" type="button"
                                onclick="decreaseQuantity(${i})">-</button>
                            <span id="numb"><input type="number" id="pr-number" name="quan[${i}]" min="1"
                                    value="${products[i].quantity}"></span>
                            <button id="btn-plus" class="btn-pluss" type="button"
                                onclick="increaseQuantity(${i})">+</button>
                        </div>

                        <h6 class="price" name="price[${i}]" id="sub${i}">${price.toFixed(2)}</h6>

                    </div>
                </div>
            </td>
            <td class="col-2 row">
            <td class="col-9 text-end">
                <b class="subprice" id="subprice_${i}">${subtotal.toFixed(2)}</b>
                <p></p>
                <p></p>
                <button class="removeitem" onclick="deleteItem(${i})">
                    <h7><i class="fa-solid fa-trash-can" style="margin-top: 20px;"></i></h7>
                </button>
            </td>
            <td class="col-3"></td>
            </td>
        </div>
        `;
        total += products[i].price * products[i].quantity;
        table.appendChild(newRow);
        }
        if (products.length > maxRows) {
        let container = table.parentElement;
        container.style.overflowY = 'auto';
        container.style.maxHeight = '485px'; // Điều chỉnh maxHeight theo nhu cầu
        container.style.scrollbarWidth = 'none'; // Cho Firefox
        container.style.scrollbarColor = '#fbc31c #fdfdfd'; // Cho Firefox
        }

        const rightsubtotal = document.getElementById("rightsub");
        rightsubtotal.innerHTML = `<span>${total.toFixed(2)}</span>`;

        const shippingPrice = parseFloat(
        document.getElementById("shipping-price").textContent.replace("$", "")
        );
        const discountPrice = parseFloat(
        document.getElementById("discount-price").textContent.replace("$", "")
        );
        const full = total + shippingPrice - discountPrice;
        const totalprice = document.getElementById("totalprice");
        totalprice.innerHTML = `<span>
            <h3><b>$${full.toFixed(2)}</h3></b>
        </span>`;
        });

        document.addEventListener("DOMContentLoaded", (event) => {
        // Lắng nghe sự kiện click cho nút "Payment"
        const paymentButton = document.getElementById("btn-p");
        paymentButton.addEventListener("click", function () {
        // Gọi hàm để lưu thông tin lên local storage
        console.log(1);
        saveCartDataToLocalStorage();
        });
        });

        function saveCartDataToLocalStorage() {
        console.log(2);
        // const updatedProducts = [];
        // const tableRows = document.querySelectorAll("#prod tr");
        // tableRows.forEach((row, index) => {
        // const quantityInput = row.querySelector(`input[name="quan[${index}]"]`);
        // const quantity = parseInt(quantityInput.value);
        // const priceElement = row.querySelector(`h6[name="price[${index}]"]`);
        // const price = parseFloat(priceElement.textContent);
        // const subtotalElement = row.querySelector(`#subprice_${index}`);
        // const subtotal = parseFloat(
        // subtotalElement.textContent.replace("$", "")
        // );
        // const productName = row.querySelector("h6").textContent;
        // const idProduct = row.querySelector(".pr-i2-id").textContent;
        // updatedProducts.push({
        // id: idProduct,
        // name: productName,
        // quantity: quantity,
        // price: price,
        // subtotal: subtotal,
        // });
        // });
        const shippingPrice = parseFloat(
        document.getElementById("shipping-price").textContent.replace("$", "")
        );
        const discountPrice = parseFloat(
        document.getElementById("discount-price").textContent.replace("$", "")
        );
        const total = parseFloat(
        document.getElementById("totalprice").textContent.replace("$", "")
        );
        const codevoucher =
            document.getElementById("voucher-input").value
            ;
        const rightsubtotal = parseFloat(
        document.getElementById("rightsub").textContent.replace("$", "")
        );
        const product_localStorage = JSON.parse(localStorage.getItem("products"));
        console.log(product_localStorage);
        const dataToStore = {
        products: product_localStorage,
        shippingPrice: shippingPrice,
        discountPrice: discountPrice,
        total: total,
        rightsub: rightsubtotal,
        codevoucher: codevoucher,
        };
        localStorage.setItem("cartData", JSON.stringify(dataToStore));
        }


        // Add popup for payment method
        const overlay = document.querySelector(".overlay");
        const popup = document.querySelector(".popup");
        const btn = document.getElementById("btn-p");

        overlay.addEventListener("click", () => {
        console.log("click");
        popup.classList.remove("active");
        overlay.classList.remove("active");
        });

        btn.addEventListener("click", (e) => {
        e.preventDefault();
        popup.classList.add("active");
        overlay.classList.add("active");
        });

        function updatePaymentButtonState() {
        if (allInputsFilledAndEmailValid()) {
        btn.removeAttribute("disabled");
        errorMessage.style.display = "none";
        } else {
        btn.setAttribute("disabled", true);
        errorMessage.style.display = "block";
        }
        }

        updatePaymentButtonState();
