
function togglePasswordVisibility(element) {
  const passwordInput = document.getElementById('password');
  const passwordConfirmationInput = document.getElementById('password_confirmation');
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    passwordConfirmationInput.type = 'text';
    element.classList.remove('fa-regular');
    element.classList.add('fa-solid'); // Change to solid eye icon
  } else {
    passwordInput.type = 'password';
    passwordConfirmationInput.type = 'password';
    element.classList.remove('fa-solid');
    element.classList.add('fa-regular'); // Change to regular eye icon
  }
}

  