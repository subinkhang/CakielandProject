function decreaseQuantity(index) {
    const inputElement = document.querySelector(`input[name="quan[${index}]"]`);
    var currentValue = parseInt(inputElement.value);
    if (currentValue > 1) {
        inputElement.value = currentValue - 1;
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
}
function updateTotal() {
    const subtotalElements = document.querySelectorAll(".subprice"); // Get all elements with class 'subprice'
    let total = 0;
    subtotalElements.forEach((subtotalElement) => {
        total += parseFloat(subtotalElement.textContent.replace("$", ""));
    });
    document.getElementById("rightsub").textContent = `$${total.toFixed(2)}`;
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
    const itemId = `item${index}`;
    const rmitem = document.getElementById(itemId);
    rmitem.remove();
    let products = JSON.parse(localStorage.getItem("products"));
    products.splice(index, 1); // Remove the item from the array
    localStorage.setItem("products", JSON.stringify(products));
    updateTotal();
}

/*----------------GET ITEM---------------------*/

document.addEventListener("DOMContentLoaded", (event) => {
    const products = JSON.parse(localStorage.getItem("products"));
    var table = document.getElementById("prod");
    let total = 0;
    for (let i = 0; i < products.length; i++) {
        var newRow = document.createElement("tr");
        newRow.id = `item${i}`;
        const subtotal = products[i].price * products[i].quantity;
        const price = parseFloat(products[i].price);
        console.log(price);
        newRow.innerHTML = ` <th scope="row">
    </th>
    <td class="col-2 text-center">${i + 1}</td>
    <td class="col-8">
        <div class="row pr-list-co">
            <div class="col-3">
                <img src="${products[i].image}" class="img-fluid">
            </div>
            <div class="col-9 row">
                <h6>${products[i].name}</h6>
                <div class="d-flex">
                    <button id="btn-minus" class="btn-minuse" type="button" onclick="decreaseQuantity(${i})">-</button>
                    <span id="numb"><input type="number" id="pr-number" name="quan[${i}]" min="1"
                            value="${products[i].quantity}"></span>
                    <button id="btn-plus" class="btn-pluss" type="button" onclick="increaseQuantity(${i})">+</button>
                </div>

                <h6 class="price" name="price[${i}]" id="sub${i}">${price.toFixed(
            2
        )}</h6>


            </div>
        </div>
    </td>
    <td class="col-2 text-end">
        <b class="subprice" id="subprice_${i}">$${subtotal.toFixed(2)}</b>
        <p></p>
        <p></p>
        <button class="removeitem" onclick="deleteItem(${i})">
            <h7><i class="fa-solid fa-trash-can" style="margin-top: 20px;"></i></h7>
        </button>
    </td>
    `;

        total += products[i].price * products[i].quantity;
        table.appendChild(newRow);
    }
    const rightsubtotal = document.getElementById("rightsub");
    rightsubtotal.innerHTML = `<span>$${total.toFixed(2)}</span>`;

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
        saveCartDataToLocalStorage();
    });
});

function saveCartDataToLocalStorage() {
    const updatedProducts = [];
    const tableRows = document.querySelectorAll("#prod tr");
    tableRows.forEach((row, index) => {
        const quantityInput = row.querySelector(`input[name="quan[${index}]"]`);
        const quantity = parseInt(quantityInput.value);
        const priceElement = row.querySelector(`h6[name="price[${index}]"]`);
        const price = parseFloat(priceElement.textContent);
        const subtotalElement = row.querySelector(`#subprice_${index}`);
        const subtotal = parseFloat(
            subtotalElement.textContent.replace("$", "")
        );
        const productName = row.querySelector("h6").textContent;
        updatedProducts.push({
            name: productName,
            quantity: quantity,
            price: price,
            subtotal: subtotal,
        });
    });
    const shippingPrice = parseFloat(
        document.getElementById("shipping-price").textContent.replace("$", "")
    );
    const discountPrice = parseFloat(
        document.getElementById("discount-price").textContent.replace("$", "")
    );
    const total = parseFloat(
        document.getElementById("totalprice").textContent.replace("$", "")
    );
    const rightsubtotal = parseFloat(
        document.getElementById("rightsub").textContent.replace("$", "")
    );
    const dataToStore = {
        products: updatedProducts,
        shippingPrice: shippingPrice,
        discountPrice: discountPrice,
        total: total,
        rightsub: rightsubtotal,
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