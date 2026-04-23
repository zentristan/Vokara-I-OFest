const eye = document.getElementById('eye');
const passwordInput = document.getElementById('password');

eye.addEventListener('click', () => {
    const isHidden = passwordInput.type === 'password';

    passwordInput.type = isHidden ? 'text' : 'password';

    eye.classList.toggle('fa-eye', !isHidden);
    eye.classList.toggle('fa-eye-slash', isHidden);
});