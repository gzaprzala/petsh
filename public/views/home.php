<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home / Petsh</title>
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

    <div class="index-main-container">
      <span class="main-text"
        ><span class="upper-text"
          >A PLACE FOR <span class="bold-text">YOU</span> AND
          <span class="bold-text">YOUR PET</span></span
        >
        <br />
        <span class="less-width-text"
          >WITH <span class="petsh-text">petsh</span> YOU CAN EASILY FIND
          <span class="bold-text">NEW FRIENDS</span> AND INVITE THEM FOR A
          <span class="bold-text">FIRST WALK</span></span
        >
      </span>

      <span class="main-text-mobile"
        >FIND NEW
        <br />
        <span class="mobile-bold">FRIENDS</span></span
      >
    </div>
    <div class="index-buttons-container">
      <button class="si-button" onclick="location.assign('login')">Sign In</button>
      <button class="su-button" onclick="location.assign('register')">
        Sign Up
      </button>
    </div>
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
