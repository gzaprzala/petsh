<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search / Petsh</title>
</head>

<body>
  <div class="search-container">
    <?php include "public/views/components/navigation.php" ?>
    <div class="search-container-cards">
      <img src="public/img/dislike.svg" alt="dislike" class="search-container-cards-dislike">
      <div class="search-container-cards-card">
        <div class="search-container-cards-card-photos">
          <img src="public/img/person.png" alt="person" class="search-container-cards-card-photos-person">
          <img src="public/img/animal.png" alt="animal" class="search-container-cards-card-photos-animal">
        </div>
        <div class="search-container-cards-card-description">
          <div class="search-container-cards-card-description-person">
            <img src="public/img/person-avatar.svg" alt="person-icon" class="search-container-cards-card-description-person-icon">
            <span class="search-container-cards-card-description-person-name">Matthew</span>
            <span class="search-container-cards-card-description-person-age">25</span>
          </div>
          <div class="search-container-cards-card-description-animal">
            <img src="public/img/animal-avatar.svg" alt="animal-icon" class="search-container-cards-card-description-animal-icon">
            <span class="search-container-cards-card-description-animal-name">Bart</span>
            <span class="search-container-cards-card-description-animal-age">8</span>
          </div>
          <div class="search-container-cards-card-description-city">
            <img src="public/img/pin.svg" alt="pin" class="search-container-cards-card-description-city-icon">
            <span class="search-container-cards-card-description-city-name">Cracow</span>
          </div>
        </div>
      </div>
      <img src="public/img/like.svg" alt="like" class="search-container-cards-like">
      <div class="search-container-cards-mobile-likes">
        <img src="public/img/dislike.svg" alt="dislike" class="search-container-cards-mobile-likes-dislike">
        <img src="public/img/like.svg" alt="like" class="search-container-cards-mobile-likes-like">
      </div>
    </div>
  </div>
  <script src="public/js/darkMode.js"></script>
</body>

</html>