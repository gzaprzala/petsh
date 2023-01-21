<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/animal.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Animal / Petsh</title>
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
    </div>
  </div>
  <script src="public/js/darkMode.js"></script>
</body>

</html>