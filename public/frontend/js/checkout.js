// Add axios to Payment button


//=======================================================




// btn.addEventListener("click", (e) => {
//     // e.preventDefault();
//     const select = document.querySelector(".form-select-pm");
//     const bankoption = document.querySelector(".bankmethod");
//     bankoption.classList.add("active");
//     overlay.classList.add("active");
// });

const btn_back = document.getElementById('btn_back');
// Lắng nghe sự kiện click trên nút
btn_back.addEventListener('click', function() {
    // Xóa hết dữ liệu trong localStorage
    localStorage.clear();
});


// const btn = document.getElementById("btn-p");
// const popup = document.querySelector(".popup");
// const qr = document.querySelector(".qr");
// const bankmethod = document.querySelector(".bankmethod");
// const overlay = document.querySelector(".overlay");

// overlay.addEventListener("click", () => {
//     popup.classList.remove("active");
//     overlay.classList.remove("active");
//     bankmethod.classList.remove("active");
// });

// btn.addEventListener("click", (e) => {
//     e.preventDefault();
//     const select = document.querySelector(".form-select-pm");
//     const bankoption = document.querySelector(".bankmethod");
//     const selectoption = select.value;
//     if (selectoption === "COD") {
//         popup.classList.add("active");
//         overlay.classList.add("active");
//     }

//     if (selectoption === "Bank") {
//         console.log("bank");
//         bankoption.classList.add("active");
//         overlay.classList.add("active");
//     }
// });

//---------------------CHECK------------
// const emailInput = document.getElementById("email");
const nameInput = document.getElementById("name");
const phoneInput = document.getElementById("phone");
const addressInput = document.getElementById("address");
const paymentButton = document.getElementById("btn-p");
const errorMessage = document.getElementById("checkinfo");

function allInputsFilledAndEmailValid() {
    // const email = emailInput.value;
    const phone = phoneInput.value;
    const isValidEmail = email !== "" && email.includes("@");
    const isValidPhone = phone !== "" && phone.length > 0 && !isNaN(phone);
    return (
        isValidEmail &&
        nameInput.value !== "" &&
        phoneInput.value !== "" &&
        addressInput.value !== ""
    );
}

function updatePaymentButtonState() {
    if (allInputsFilledAndEmailValid()) {
        paymentButton.removeAttribute("disabled");
        errorMessage.style.display = "none";
    } else {
        paymentButton.setAttribute("disabled", true);
        errorMessage.style.display = "block";
    }
}

// emailInput.addEventListener("input", updatePaymentButtonState);
// nameInput.addEventListener("input", updatePaymentButtonState);
// phoneInput.addEventListener("input", updatePaymentButtonState);
// addressInput.addEventListener("input", updatePaymentButtonState);

// updatePaymentButtonState();

/*--------------------Fill info of product----------------------*/
document.addEventListener("DOMContentLoaded", (event) => {
    const cartData = JSON.parse(localStorage.getItem("cartData"));
    var table = document.getElementById("list");
    let total = 0;
    const maxRows = 3;
    for (let i = 0; i < cartData.products.length; i++) {
        var newRow = document.createElement("tr");
        newRow.id = `item${i}`;
        newRow.innerHTML = `
        <tr>
    <td style="height: 150px; width: 170px;">
        <img src="public/backend/upload/${cartData.products[i].image}"
            class="img-fluid" style="height: 150px; width: 150px;">
    </td>
    <td>
        <h5><b>${cartData.products[i].name}</b></h5>
        <p>Quantity: <span>${cartData.products[i].quantity}</span></p>
        <p class="price"><b>$${cartData.products[i].price}</b></p>
    </td>
    </tr>
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
    subtt.innerHTML = `<span>
        <p1><b>${cartData.rightsub.toFixed(2)}</p1></b>
    </span>`;
    shipping.innerHTML = `<span>
        <p1><b>${cartData.shippingPrice.toFixed(2)}</p1></b>
    </span>`;
    discount.innerHTML = `<span>
        <p1><b>${cartData.discountPrice.toFixed(2)}</p1></b>
    </span>`;
    tt.innerHTML = `<span><b>$${cartData.total.toFixed(2)}</b></span>`;
});

// $(document).ready(function(){
//     $('#updateForm').on('submit', function(event){
//         event.preventDefault(); // Prevent the default form submission

//         $.ajax({
//             url: "{{ url('/checkout-update/' . auth()->user()->id) }}",
//             method: "POST",
//             data: $(this).serialize(), // Serialize the form data
//             success: function(response) {
//                 // Handle success - display a message, update the UI, etc.
//                 alert('Your details have been successfully updated.');
//             },
//             error: function(xhr, status, error) {
//                 // Handle error - display an error message, etc.
//                 alert('There was an error updating your details. Please try again.');
//             }
//         });
//     });
// });


//Code mới
// document.addEventListener("DOMContentLoaded", (event) => {
//     const cartData = JSON.parse(localStorage.getItem("cartData"));
//     if (!cartData || !cartData.products) {
//         console.error("No cart data found or cart data is invalid.");
//         return;
//     }

//     const table = document.getElementById("list");

//     cartData.products.forEach((product, i) => {
//         const newRow = document.createElement("tr");
//         newRow.id = `item${i}`;
//         newRow.innerHTML = `
//             <td style="height: 150px; width: 170px;">
//                 <img src="${product.imageURL}" class="img-fluid" style="height: 150px; width: 150px;">
//             </td>
//             <td>
//                 <h5><b>${product.name}</b></h5>
//                 <p>Quantity: <span>${product.quantity}</span></p>
//                 <p class="price"><b>$${product.price.toFixed(2)}</b></p>
//             </td>
//         `;
//         table.appendChild(newRow);
//     });

//     const subtt = document.getElementById("subtotal");
//     const shipping = document.getElementById("shipping");
//     const discount = document.getElementById("discount");
//     const tt = document.getElementById("total");

//     subtt.innerHTML = `<span><p1><b>$${cartData.rightsub.toFixed(2)}</p1></b></span>`;
//     shipping.innerHTML = `<span><p1><b>$${cartData.shippingPrice.toFixed(2)}</p1></b></span>`;
//     discount.innerHTML = `<span><p1><b>-$${cartData.discountPrice.toFixed(2)}</p1></b></span>`;
//     tt.innerHTML = `<span><b>$${cartData.total.toFixed(2)}</b></span>`;
// });
