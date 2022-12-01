<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile / Petsh</title>
</head>

<body>
  <div class="profile-container">
    <?php include "public/views/components/navigation.php" ?>
    <div class="profile-container-main">
      <div class="profile-container-main-photo">
        <form class="profile-container-main-photo-update" method="POST">Photo
          <button class="profile-container-main-photo-update-upload">Upload</button>
        </form>
        <img class="profile-container-main-photo-photo" src="public/img/light-mode.svg" alt="photo">
      </div>
      <div class="profile-container-main-name">Name
        <form class="profile-container-main-name-form" method="POST">
          <input type="text" class="profile-container-main-name-form-update" placeholder="Enter new name...">
        </form>
      </div>
      <div class="profile-container-main-age">Age
        <form class="profile-container-main-age-form" method="POST">
          <input type="text" class="profile-container-main-age-form-update" placeholder="Enter new age...">
        </form>
      </div>
      <div class="profile-container-main-city">City
        <form class="profile-container-main-city-form" method="POST">
          <input type="text" class="profile-container-main-city-form-update" placeholder="Enter new city...">
        </form>
      </div>
      <div class="profile-container-main-password">New password
        <form class="profile-container-main-password-form" method="POST">
          <input type="password" class="profile-container-main-password-form-update" placeholder="Enter new password...">
        </form>
      </div>
      <button class="profile-container-main-apply">Apply</button>
    </div>
  </div>
  <script src="public/js/darkMode.js"></script>
</body>

</html>