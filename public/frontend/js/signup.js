function togglePasswordVisibility(iconElement, inputId) {
  const passwordInput = document.getElementById(inputId);
  if (passwordInput) {
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
}