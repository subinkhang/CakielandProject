const btn = document.getElementById("btn-p");
const popup = document.querySelector(".popup");
const closeBtn = document.querySelector(".btnback");
const overlay = document.querySelector(".overlay");
const qr = document.querySelector(".qr");
const bankmethod = document.querySelector(".bankmethod")

// btn.addEventListener("click", (e) => {
//     e.preventDefault();
//     popup.classList.add("active");
//     overlay.classList.add("active");
// });

overlay.addEventListener("click", () => {
  popup.classList.remove("active");
  overlay.classList.remove("active");
  bankmethod.classList.remove("active");
});



    btn.addEventListener("click", (e) => {
        e.preventDefault();
        const select = document.querySelector(".form-select-pm");
        const bankoption = document.querySelector(".bankmethod");
        const selectoption = select.value;
    if(selectoption==="COD"){
        popup.classList.add("active");
        overlay.classList.add("active");
};

    if(selectoption==="Bank"){
        console.log("bank");
    bankoption.classList.add("active");
    overlay.classList.add("active");
    };
});

//---------------------CHECK------------
const emailInput = document.getElementById("email");
const nameInput = document.getElementById("name");
const phoneInput = document.getElementById("phone");
const addressInput = document.getElementById("address");
const paymentButton = document.getElementById("btn-p");
const errorMessage = document.getElementById("checkinfo");

function allInputsFilledAndEmailValid() {
  const email = emailInput.value;
  const phone = phoneInput.value;
  const isValidEmail = email !== "" && email.includes("@");
  const isValidPhone = phone !== "" && phone.length > 0 && !isNaN(phone);
  return isValidEmail && nameInput.value !== "" && phoneInput.value !== "" && addressInput.value !== "";
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

emailInput.addEventListener("input", updatePaymentButtonState);
nameInput.addEventListener("input", updatePaymentButtonState);
phoneInput.addEventListener("input", updatePaymentButtonState);
addressInput.addEventListener("input", updatePaymentButtonState);

updatePaymentButtonState();

/*--------------------Fill info of product----------------------*/
document.addEventListener('DOMContentLoaded', (event) => {
  const cartData = JSON.parse(localStorage.getItem('cartData'));
  var table = document.getElementById('list');
  let total = 0;
  for (let i = 0; i < cartData.products.length; i++) {
      var newRow = document.createElement("tr");
      newRow.id = `item${i}`;
      newRow.innerHTML = `
          
          <tr>
            <td style="height: 150px; width: 170px;">
                <img src="{{ asset('frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg') }}"
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
  const subtt = document.getElementById('subtotal')
  const shipping = document.getElementById('shipping')
  const discount = document.getElementById('discount')
  const tt = document.getElementById('total')
  subtt.innerHTML = `<span><p1><b>${cartData.rightsub.toFixed(2)}</p1></b></span>`
  shipping.innerHTML = `<span><p1><b>${cartData.shippingPrice.toFixed(2)}</p1></b></span>`
  discount.innerHTML = `<span><p1><b>${cartData.discountPrice.toFixed(2)}</p1></b></span>`
  tt.innerHTML = `<span><b>${cartData.total.toFixed(2)}</b></span>`
});


