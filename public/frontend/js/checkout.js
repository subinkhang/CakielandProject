const btn = document.getElementById("btn-p");
const popup = document.querySelector(".popup");
const closeBtn = document.querySelector(".btnback");
const overlay = document.querySelector(".overlay");

// btn.addEventListener("click", (e) => {
//     e.preventDefault();
//     popup.classList.add("active");
//     overlay.classList.add("active");
// });

closeBtn.addEventListener("click", () => {
  popup.classList.remove("active");
  overlay.classList.remove("active");
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

function allInputsFilledAndEmailValid() {
  const email = emailInput.value;
  const phone = phoneInput.value;
  const isValidEmail = email !== "" && email.includes("@");
  const isValidPhone = phone !== "" && phone.length > 0 && !isNaN(phone);
  return isValidEmail && nameInput.value !== "" && phoneInput.value !== "" && addressInput.value !== "";
}

// Add event listeners to all input elements
emailInput.addEventListener("input", () => {
  paymentButton.disabled = !allInputsFilledAndEmailValid();
});
nameInput.addEventListener("input", () => {
  paymentButton.disabled = !allInputsFilledAndEmailValid();
});
phoneInput.addEventListener("input", () => {
  paymentButton.disabled = !allInputsFilledAndEmailValid();
});
addressInput.addEventListener("input", () => {
  paymentButton.disabled = !allInputsFilledAndEmailValid();
});

// Check initial state (disable button if any input is empty or email is invalid)
paymentButton.disabled = !allInputsFilledAndEmailValid();


