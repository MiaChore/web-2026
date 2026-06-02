const emailInput = document.getElementById('emailInput');
const passwordInput = document.getElementById('passwordInput');
const loginButton = document.getElementById('loginButton');
const loginError = document.getElementById('loginError');

loginButton.addEventListener('click', () => {
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    if (!email.includes('@') || !email.includes('.')) {
        loginError.style.visibility = 'visible';
        return;
    }
    loginError.style.visibility = 'hidden';
    console.log('Успешная авторизация');
});