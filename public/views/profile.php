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
        <?php include "public/views/components/photo-upload.php" ?>
        <img class="profile-container-main-photo-photo" src="public/uploads/<?php echo $photo->getPhoto() ?>" alt="photo">
      </div>
      <div class="profile-container-main-name">Name
        <div class="profile-container-main-name-form" method="POST">
          <input type="text" class="profile-container-main-name-form-update" placeholder="Enter new name...">
        </div>
      </div>
      <div class="profile-container-main-age">Age
        <div class="profile-container-main-age-form" method="POST">
          <input type="text" class="profile-container-main-age-form-update" placeholder="Enter new age...">
        </div>
      </div>
      <div class="profile-container-main-city">City
        <div class="profile-container-main-city-form" method="POST">
          <input type="text" class="profile-container-main-city-form-update" placeholder="Enter new city...">
        </div>
      </div>
      <div class="profile-container-main-password">New password
        <div class="profile-container-main-password-form" method="POST">
          <input type="password" class="profile-container-main-password-form-update" placeholder="Enter new password...">
        </div>
      </div>
      <button class="profile-container-main-apply">Apply</button>
    </div>
  </div>
  <script src="public/js/darkMode.js"></script>
</body>

</html>