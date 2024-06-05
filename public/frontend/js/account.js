const avatarInput = document.getElementById("avatarUpload");
const avatarPreview = document.getElementById("avatarPreview");
// avatarPreview.src = 'path/to/default-avatar.jpg';

avatarInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = () => {
            avatarPreview.src = reader.result;
        };
        reader.readAsDataURL(file);
    }
});
// const avatarInput = document.getElementById('avatarUpload');
// const avatarCircle = document.querySelector('.circle');

// avatarInput.addEventListener('change', function() {
//   const file = this.files[0];
//   if (file) {
//     const reader = new FileReader();
//     reader.onload = function(event) {
//       avatarCircle.style.backgroundImage = `url(${event.target.result})`;
//     };
//     reader.readAsDataURL(file);
//   }
// });

let isValid = false; // Khởi tạo isValid thành false
function validateDateOfBirth() {
    // const nameInput = document.getElementById("Name");
    const birthdayInput = document.getElementById("Birthday");
    const phoneInput = document.getElementById("Phone_number");
    // const emailInput = document.getElementById("Email");
    // const addressInput = document.getElementById("Address");
    // event.preventDefault();
    clearValidationMessages();
    let isValid = true;
    const birthday = validateDate(birthdayInput.value);
    if (!birthday) {
        isValid = false;
        showMessage(birthdayInput, "Invalid date format (dd/mm/yyyy)");
    }
    const phone = validatePhone(phoneInput.value);
    if (!phone) {
        isValid = false;
        showMessage(phoneInput, "Phone must start with 0 and be 10 digits");
    }
}

function validateDate(dateString) {
    const regex = /^\d{2}\/\d{2}\/\d{4}$/;
    if (!regex.test(dateString)) {
        return false;
    }
    const parts = dateString.split("/");
    const day = parseInt(parts[0], 10);
    const month = parseInt(parts[1], 10) - 1;
    const year = parseInt(parts[2], 10);
    const date = new Date(year, month, day);
    if (
        date.getDate() !== day ||
        date.getMonth() !== month ||
        date.getFullYear() !== year
    ) {
        return false;
    }

    return date;
}

function validatePhone(phoneString) {
    const regex = /^0\d{9}$/;
    return regex.test(phoneString);
}

function clearValidationMessages() {
    const allInputs = document.querySelectorAll(".inside");
    for (const input of allInputs) {
        const messageElement = input.nextElementSibling;
        if (
            messageElement &&
            messageElement.classList.contains("validation-message")
        ) {
            messageElement.textContent = "";
        }
    }
}

function showMessage(inputElement, message) {
    let messageElement = inputElement.nextElementSibling;
    if (
        !messageElement ||
        !messageElement.classList.contains("validation-message")
    ) {
        const newMessageElement = document.createElement("p");
        newMessageElement.classList.add("validation-message");
        newMessageElement.style.color = "red";
        inputElement.parentNode.insertBefore(
            newMessageElement,
            inputElement.nextSibling
        );
        messageElement = newMessageElement;
    }
    messageElement.textContent = message;
}

emailInput.disabled = true;
const form = document.getElementById("myForm");
if (form) {
    form.addEventListener("submit", validateDateOfBirth);
}
//   document.getElementById('avatarUpload').addEventListener('change', function(event) {
//     const reader = new FileReader();
//     reader.onload = function() {
//         const avatarPreview = document.getElementById('avatarPreview');
//         avatarPreview.src = reader.result;
//     };
//     reader.readAsDataURL(event.target.files[0]);
// });

// document.getElementById('avatarUpload').addEventListener('change', function(event) {
//   event.preventDefault()
//   const file = event.target.files[0];
//   if (file) {
//       const reader = new FileReader();
//       reader.onload = function(e) {
//           document.getElementById('avatarPreview').src = e.target.result;
//       }
//       reader.readAsDataURL(file);
//   }
// });
