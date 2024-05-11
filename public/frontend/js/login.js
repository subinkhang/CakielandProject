// // LIMIT PASSWORD
// function validateEmail(email) {
//     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
//   }
//   function checkEmail(email) {
//     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (!emailRegex.test(email)) {
//       return false; 
//     }
  
//     return true; 
//   }
  
  function checkPasswordLength() {
    console.log("hello")
    const passwordInput = document.getElementById("password");
    const password = passwordInput.value;
    const errorMessage = document.getElementById("passwordError");
  
    if (password.length < 6) {
      event.preventDefault();
  
      if (!errorMessage) {
        const errorMessage = document.createElement("p");
        const linebreak = document.createElement("br");
        errorMessage.textContent = `Password must be at least 6 characters long.`;
        errorMessage.style.color = "red";
        errorMessage.style.fontSize = "0.8rem";
        errorMessage.style.margin = "5px 0";
        errorMessage.id = "passwordError";
        const passwordContainer = passwordInput.parentElement;
        passwordContainer.appendChild(errorMessage);
      } else {
        errorMessage.textContent = "Password must be at least 6 characters long.";
      }
    } else if (!/^[a-zA-Z0-9]+$/.test(password)) {
      event.preventDefault();
  
      if (!errorMessage) {
        const errorMessage = document.createElement("p");
        const linebreak = document.createElement("br");
        errorMessage.textContent = `Password must only contain letters (a-z, A-Z) and numbers (0-9).`;
        errorMessage.style.color = "red";
        errorMessage.style.fontSize = "0.8rem";
        errorMessage.style.margin = "5px 0";
        errorMessage.id = "passwordError";
        const passwordContainer = passwordInput.parentElement;
        passwordContainer.appendChild(errorMessage);
      } else {
        errorMessage.textContent = `Password must only contain letters (a-z, A-Z) and numbers (0-9).`;
      }
    } else {
      if (errorMessage) {
        errorMessage.remove();
      }
    }
  
    const emailInput = document.getElementById('email');
    const email = emailInput.value.trim();
  
    if (!checkEmail(email)) {
      if (!errorMessage) {
        const errorMessage = document.createElement("p");
        errorMessage.textContent = "Invalid Email!"; 
        errorMessage.style.color = "red";
        errorMessage.style.fontSize = "0.8rem";
        errorMessage.style.margin = "5px 0";
        errorMessage.id = "emailError"; 
        const emailContainer = emailInput.parentElement;
        emailContainer.appendChild(errorMessage);
      } else if (errorMessage.id !== "emailError") {
        errorMessage.remove();
        const errorMessage = document.createElement("p");
        errorMessage.textContent = "Invalid Email!"; 
        errorMessage.style.color = "red";
        errorMessage.style.fontSize = "0.8rem";
        errorMessage.style.margin = "5px 0";
        errorMessage.id = "emailError";
        const emailContainer = emailInput.parentElement;
        emailContainer.appendChild(errorMessage);
      }
  
      emailInput.focus(); 
      return false; 
    } else {
      if (errorMessage && errorMessage.id === "emailError") {
        errorMessage.remove();
      }
    }
  
    // const form = document.querySelector("form");
    // form.addEventListener("submit", checkPasswordLength);
  }
  function togglePasswordVisibility(iconElement) {
    const passwordInput = document.getElementById("password"); 
    if (passwordInput.type === "password") {
      passwordInput.type = "text"; 
      iconElement.classList.remove("fa-eye"); 
      iconElement.classList.add("fa-eye-slash"); 
    } else {
      passwordInput.type = "password"; 
      iconElement.classList.remove("fa-eye-slash");
      iconElement.classList.add("fa-eye"); 
    }
  }
  
  // //   -------------------------------
  
  // function saveLogin() {
  // const username = document.getElementById('email').value;
  // const password = document.getElementById('password').value;
  // const rememberMe = document.getElementById('saveLogin').checked;
  
  // if (rememberMe) {
  //   localStorage.setItem('username', username);
  //   localStorage.setItem('password', password);
  // } else {
  //   localStorage.removeItem('username');
  //   localStorage.removeItem('password');
  // }
  // }
  
  // document.getElementById('loginForm').addEventListener('submit', function(event) {
  // event.preventDefault(); 
  // saveLogin(); 
  // });
  
  // window.addEventListener('load', function() {
  // const username = localStorage.getItem('username');
  // const password = localStorage.getItem('password');
  // if (username && password) {
  //   document.getElementById('username').value = username;
  //   document.getElementById('password').value = password;
  // }
  // });
  