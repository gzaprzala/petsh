window.onload = () => {
  const button = document.querySelector('.container-header-darkmode');
  const buttonSI = document.querySelector('.container-navigation-darkmode');

  const instagramLogo = document.querySelector(
    '.container-footer-socials-instagram'
  );

  const twitterLogo = document.querySelector(
    '.container-footer-socials-twitter'
  );

  const facebookLogo = document.querySelector(
    '.container-footer-socials-facebook'
  );

  const body = document.querySelector('body');

  if (button) {
    if (localStorage.getItem('mode') === 'dark') {
      button.src = 'public/img/light-mode.svg';
      instagramLogo.src = 'public/img/logo-insta-dark.svg';
      twitterLogo.src = 'public/img/logo-twitter-dark.svg';
      facebookLogo.src = 'public/img/logo-fb-dark.svg';
      body.classList.toggle('dark-mode');
    }

    button.addEventListener('click', () => {
      body.classList.toggle('dark-mode');
      if (body.classList.contains('dark-mode')) {
        button.src = 'public/img/light-mode.svg';
        instagramLogo.src = 'public/img/logo-insta-dark.svg';
        twitterLogo.src = 'public/img/logo-twitter-dark.svg';
        facebookLogo.src = 'public/img/logo-fb-dark.svg';
        localStorage.setItem('mode', 'dark');
      } else {
        button.src = 'public/img/dark-mode.svg';
        instagramLogo.src = 'public/img/logo-insta.svg';
        twitterLogo.src = 'public/img/logo-twitter.svg';
        facebookLogo.src = 'public/img/logo-fb.svg';
        localStorage.setItem('mode', 'light');
      }
    });
  } else if (buttonSI) {
    if (localStorage.getItem('mode') === 'dark') {
      buttonSI.src = 'public/img/light-mode.svg';
      body.classList.toggle('dark-mode');
    }

    buttonSI.addEventListener('click', () => {
      body.classList.toggle('dark-mode');
      if (body.classList.contains('dark-mode')) {
        buttonSI.src = 'public/img/light-mode.svg';
        localStorage.setItem('mode', 'dark');
      } else {
        buttonSI.src = 'public/img/dark-mode.svg';
        localStorage.setItem('mode', 'light');
      }
    });
  }
};
