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


