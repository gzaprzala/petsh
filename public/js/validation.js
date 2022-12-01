const form = document.querySelector('.container-main-registe-form');
const emailInput = document.querySelector(
  '.container-main-register-form-email'
);
const passwordInput = document.querySelector(
  '.container-main-register-form-password'
);
const repeatPasswordInput = document.querySelector(
  '.container-main-register-form-repeat-password'
);

const isEmail = (email) => {
  return /\S+@\S+\.\S+/.test(email);
};

const arePasswordsSame = (password, repeatedPassword) => {
  return password === repeatedPassword;
};

const markValidation = (element, condition) => {
  if (!condition) {
    element.classList.add('no-valid');
  } else {
    element.classList.remove('no-valid');
  }
};

emailInput.addEventListener('keyup', () => {
  setTimeout(() => {
    markValidation(emailInput, isEmail(emailInput.value));
  }, 1000);
});

repeatPasswordInput.addEventListener('keyup', () => {
  setTimeout(() => {
    const condition = arePasswordsSame(
      passwordInput.value,
      repeatPasswordInput.value
    );
    markValidation(repeatPasswordInput, condition);
  }, 1000);
});
