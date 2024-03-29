<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/register.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register / Petsh</title>
  <script src="public/js/colorPicker.js" defer></script>
  <script src="public/js/validation.js" defer></script>
</head>

<body>
  <div class="container">
    <?php include "public/views/components/header.php" ?>
    <div class="container-main-register">
      <div class="container-main-register-buttons">
        <a href="login" class="container-main-register-buttons-signin">SIGN IN</a>
        <a href="register" class="container-main-register-buttons-signup active">SIGN UP</a>
      </div>
      <form action="register" method="POST" class="container-main-register-form">
        <div class="container-main-login-form-messages">
          <?php
          if (isset($messages)) {
            foreach ($messages as $message) {
              echo $message;
            }
          }
          ?>
        </div>
        <input name="username" type="text" placeholder="login" class="container-main-register-form-username">
        <input name="email" type="text" placeholder="email" class="container-main-register-form-email">
        <input name="password" type="password" placeholder="password" class="container-main-register-form-password">
        <input name="confirmedPassword" type="password" placeholder="repeat password" class="container-main-register-form-repeat-password">
        <button type="submit" class="container-main-register-form-submit">CONFIRM</button>
      </form>
    </div>
    <?php include "public/views/components/footer.php" ?>
  </div>
</body>

</html>