document.addEventListener("DOMContentLoaded", (event) => {
    // Kiểm tra xem dữ liệu giỏ hàng có trong localStorage không
    const cartData = JSON.parse(localStorage.getItem("cartData"));
    if (!cartData || !cartData.products) {
        console.error('No cartData found in localStorage or cartData.products is empty');
        return;
    }

    var table = document.getElementById("list");
    const maxRows = 3;
    
    for (let i = 0; i < cartData.products.length; i++) {
        var newRow = document.createElement("tr");
        newRow.id = `item${i}`;
        newRow.innerHTML = `
            <td style="height: 150px; width: 170px;">
                <img src="public/backend/upload/${cartData.products[i].image}"
            class="img-fluid" style="height: 150px; width: 150px;">
            </td>
            <td>
                <h5><b>${cartData.products[i].name}</b></h5>
                <p>Quantity: <span>${cartData.products[i].quantity}</span></p>
                <p class="price"><b>$${cartData.products[i].price}</b></p>
            </td>
        `;
        table.appendChild(newRow);
    }

    if (cartData.products.length > maxRows) {
        let container = table.parentElement;
        container.style.overflowY = 'auto';
        container.style.maxHeight = '550px'; // Điều chỉnh maxHeight theo nhu cầu
        container.style.scrollbarWidth = 'none'; // Cho Firefox
        container.style.scrollbarColor = '#fbc31c #fdfdfd'; // Cho Firefox
    }

    const subtt = document.getElementById("subtotal");
    const shipping = document.getElementById("shipping");
    const discount = document.getElementById("discount");
    const tt = document.getElementById("total");

    subtt.innerHTML = `<span><p1><b>${cartData.rightsub.toFixed(2)}</p1></b></span>`;
    shipping.innerHTML = `<span><p1><b>${cartData.shippingPrice.toFixed(2)}</p1></b></span>`;
    discount.innerHTML = `<span><p1><b>${cartData.discountPrice.toFixed(2)}</p1></b></span>`;
    tt.innerHTML = `<span><b>$${cartData.total.toFixed(2)}</b></span>`;
});