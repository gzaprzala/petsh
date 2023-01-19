<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/login.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login / Petsh</title>
</head>

<body>
  <div class="container">
    <?php include "public/views/components/header.php" ?>
    <div class="container-main-login">
      <div class="container-main-login-buttons">
        <a href="login" class="container-main-login-buttons-signin active">SIGN IN</a>
        <a href="register" class="container-main-login-buttons-signup">SIGN UP</a>
      </div>
      <form action="login" method="POST" class="container-main-login-form">
        <div class="container-main-login-form-messages">
          <?php
          if (isset($messages)) {
            foreach ($messages as $message) {
              echo $message;
            }
          }
          ?>
        </div>
        <input name="username" type="text" placeholder="login" class="container-main-login-form-username">
        <input name="password" type="password" placeholder="password" class="container-main-login-form-password">
        <button type="submit" class="container-main-login-form-submit">CONFIRM</button>
      </form>
    </div>
    <?php include "public/views/components/footer.php" ?>
  </div>
  <script src="public/js/darkMode.js"></script>
</body>

</html>