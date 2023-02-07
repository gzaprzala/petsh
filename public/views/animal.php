<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/animal.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Animal / Petsh</title>
  <script src="public/js/colorPicker.js" defer></script>
</head>

<body>
  <div class="animal-container">
    <?php include "public/views/components/navigation.php" ?>
    <div class="animal-container-main-buttons">
      <a href="profile" class="animal-container-main-buttons-person">PERSON</a>
      <a href="animal" class="animal-container-main-buttons-animal active">ANIMAL</a>
    </div>
    <div class="animal-container-main">
      <div class="animal-container-main-photo">
        <?php include "public/views/components/animal-upload.php" ?>
        <img class="animal-container-main-photo-photo" src="public/uploads/<?= $userAnimal->getPhoto(); ?>" alt="photo">
      </div>
      <form class="animal-container-main-form" action="userAnimalInfoUpload" method="POST">
        <div class="animal-container-main-name">Name
          <div class="animal-container-main-name-form" method="POST">
            <input name="name" type="text" class="animal-container-main-name-form-update" value=<?= $userAnimalInfo->getName(); ?>>
          </div>
        </div>
        <div class="animal-container-main-age">Age
          <div class="animal-container-main-age-form" method="POST">
            <input name="age" type="text" class="animal-container-main-age-form-update" value=<?= $userAnimalInfo->getAge(); ?>>
          </div>
        </div>
        <button class="animal-container-main-apply">Apply</button>
      </form>
    </div>
  </div>
</body>

</html>