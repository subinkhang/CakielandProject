
function togglePasswordVisibility(element) {
    const passwordField = element.parentElement.previousElementSibling.querySelector('input');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        element.classList.remove('fa-eye');
        element.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        element.classList.remove('fa-eye-slash');
        element.classList.add('fa-eye');
    }
}