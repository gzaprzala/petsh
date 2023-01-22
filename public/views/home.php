<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/home.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home / Petsh</title>
  <script src="public/js/darkMode.js" defer></script>
</head>

<body>
  <div class="container">
    <?php include "public/views/components/header.php" ?>
    <div class="container-main">
      <span class="container-main-text">
        <span class="container-main-text-upper">A PLACE FOR
          <span class="container-main-text-upper-bold">YOU</span> AND
          <span class="container-main-text-upper-bold">YOUR PET</span>
        </span>
        <br>
        <span class="container-main-text-lower">WITH
          <span class="container-main-text-lower-petsh">petsh</span> YOU CAN EASILY FIND
          <span class="container-main-text-lower-bold">NEW FRIENDS</span> AND INVITE THEM FOR A
          <span class="container-main-text-lower-bold">FIRST WALK</span>
        </span>
      </span>
      <span class="container-main-text-mobile">FIND NEW
        <span class="container-main-text-mobile-bold">FRIENDS</span>
      </span>
    </div>
    <div class="container-buttons">
      <a href="login" class="container-buttons-signin">SIGN IN</a>
      <a href="register" class="container-buttons-signup">SIGN UP</a>
    </div>
    <?php include "public/views/components/footer.php" ?>
  </div>
</body>

</html>