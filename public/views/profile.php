<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/profile.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile / Petsh</title>
  <script src="public/js/darkMode.js" defer></script>
</head>

<body>
  <div class="profile-container">
    <?php include "public/views/components/navigation.php" ?>
    <div class="profile-container-main-buttons">
      <a href="profile" class="profile-container-main-buttons-person active">PERSON</a>
      <a href="animal" class="profile-container-main-buttons-animal">ANIMAL</a>
    </div>
    <div class="profile-container-main">
      <div class="profile-container-main-photo">
        <?php include "public/views/components/photo-upload.php" ?>
        <img class="profile-container-main-photo-photo" src="public/uploads/<?= $photo->getPhoto(); ?>" alt="photo">
      </div>
      <form class="profile-container-main-form" action="userInfoUpload" method="POST">
        <div class="profile-container-main-name">Name
          <div class="profile-container-main-name-form" method="POST">
            <input name="name" type="text" class="profile-container-main-name-form-update" value=<?= $userInfo->getName(); ?>>
          </div>
        </div>
        <div class="profile-container-main-age">Age
          <div class="profile-container-main-age-form" method="POST">
            <input name="age" type="text" class="profile-container-main-age-form-update" value=<?= $userInfo->getAge(); ?>>
          </div>
        </div>
        <div class="profile-container-main-city">City
          <div class="profile-container-main-city-form" method="POST">
            <input name="city" type="text" class="profile-container-main-city-form-update" value=<?= $userInfo->getCity(); ?>>
          </div>
        </div>
        <div class="profile-container-main-password">New password
          <div class="profile-container-main-password-form" method="POST">
            <input type="password" class="profile-container-main-password-form-update" placeholder="Enter new password...">
          </div>
        </div>
        <button class="profile-container-main-apply">Apply</button>
      </form>
      <a href="logout" class="profile-container-main-logout">LOG OUT</a>
    </div>
  </div>
</body>

</html>