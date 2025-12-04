const passwordInput = document.getElementById('passwordInput');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', () => {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    if (type === 'text') {
        togglePassword.classList.remove('ri-eye-off-line');
        togglePassword.classList.add('ri-eye-line');
    } else {
        togglePassword.classList.remove('ri-eye-line');
        togglePassword.classList.add('ri-eye-off-line');
    }
});
