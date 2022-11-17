<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register / Petsh</title>
</head>
<body>
  <div class="index-container">
    <div class="index-logo-container">
      <img
        class="index-logo"
        src="public/img/logo.png"
        alt="logo"
        onclick="location.assign('/')"
      />
    </div>

    <div class="index-main-container-si-su">
      <div class="login-container">
        <div class="si-su">
          <button class="sign-in" onclick="location.assign('login')">
            Sign In
          </button>
          <button class="sign-up active" onclick="location.assign('register')">
            Sign Up
          </button>
        </div>
        <form class="login">
          <input class="username" type="text" placeholder="login" />
          <input class="email" type="text" placeholder="email" />
          <input class="password" type="password" placeholder="password" />
          <input
            class="repeat-password"
            type="password"
            placeholder="repeat password"
          />
          <button class="submit">CONFIRM</button>
        </form>
      </div>
    </div>
    <div class="index-buttons-container-si-su"></div>
    <div class="index-bottom-container">
      <div class="index-socials">
        <div class="social-logos">
          <img
            class="insta-logo-index"
            src="public/img/logo-insta.svg"
            alt="logo-insta"
            onclick="location.assign('https://www.instagram.com')"
          />
          <img
            class="twitter-logo-index"
            src="public/img/logo-twitter.svg"
            alt="logo-twitter"
            onclick="location.assign('https://www.twitter.com')"
          />
          <img
            class="fb-logo-index"
            src="public/img/logo-fb.svg"
            alt="logo-fb"
            onclick="location.assign('https://www.facebook.com')"
          />
        </div>
      </div>
      <div class="animals-container">
        <img class="index-animals" src="public/img/animals.png" alt="animals" />
      </div>
    </div>
  </div>
</body>
