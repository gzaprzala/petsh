const captchaInput = document.querySelector('.container-main-login-form-captcha-input');
const captchaText = document.querySelector('.container-main-login-form-captcha-text');
const loginBtn = document.querySelector('.container-main-login-form-submit');
const possibleChars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz123456789';

let captchaAnswer;

function generateCaptcha() {
  let captcha = '';
  for (let i = 0; i < 6; i++) {
    captcha += possibleChars.charAt(Math.floor(Math.random() * possibleChars.length));
  }
  captchaText.textContent = captcha;
  captchaAnswer = captcha;
  loginBtn.disabled = true;
  loginBtn.classList.add('no-valid');
}

generateCaptcha();

captchaInput.addEventListener('keyup', function() {
  if (captchaInput.value === captchaAnswer) {
    loginBtn.disabled = false;
    loginBtn.classList.remove('no-valid');
  } else {
    loginBtn.disabled = true;
    loginBtn.classList.add('no-valid');
  }
});
