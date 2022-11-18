<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / Petsh</title>
  </head>
  <body>
    <div class="index-container">
      <div class="index-logo-container">
        <a href="/">
          <img
            class="index-logo"
            src="public/img/logo.png"
            alt="logo"
          />
        </a>
      </div>

      <div class="index-main-container-si-su">
        <div class="login-container">
          <div class="si-su">
            <a href="login" class="sign-in active">
              Sign In
            </a>
            <a href="register" class="sign-up">
              Sign Up
            </a>
          </div>
          <form class="login" action="login" method="POST">
            <div class="messages">
              <?php
                if (isset($messages)) {
                  foreach($messages as $message) {
                    echo $message;
                  }
                }
              ?>
            </div>
            <input class="username" name="username" type="text" placeholder="login" />
            <input class="password" name="password" type="password" placeholder="password" />
            <button class="submit">CONFIRM</button>
          </form>
        </div>
      </div>
      <div class="index-buttons-container-si-su"></div>
      <div class="index-bottom-container">
        <div class="index-socials">
          <div class="social-logos">
            <a href="https://www.instagram.com">
              <img
                class="insta-logo-index"
                src="public/img/logo-insta.svg"
                alt="logo-insta"
              />
            </a>
            <a href="https://www.twitter.com">
              <img
                class="twitter-logo-index"
                src="public/img/logo-twitter.svg"
                alt="logo-twitter"
              />
            </a>
            <a href="https://www.facebook.com">
              <img
                class="fb-logo-index"
                src="public/img/logo-fb.svg"
                alt="logo-fb"
              />
            </a>
          </div>
        </div>
        <div class="animals-container">
          <img class="index-animals" src="public/img/animals.png" alt="animals" />
        </div>
      </div>
    </div>
  </body>
</html>
