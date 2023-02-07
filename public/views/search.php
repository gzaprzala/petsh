<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/search.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search / Petsh</title>
  <script src="public/js/colorPicker.js" defer></script>
  <script src="public/js/reactions.js" defer></script>
</head>

<body>
  <div class="search-container">
    <?php include "public/views/components/navigation.php" ?>
    <div class="search-container-cards">
      <?php foreach ($searchCards as $searchCard) : ?>
        <div class="search-container-cards-card">
          <div class="search-container-cards-card-photos">
            <img class="search-container-cards-card-photos-person" src="public/uploads/<?= $searchCard->getPersonPhoto(); ?>" alt="photo">
            <img class="search-container-cards-card-photos-animal" src="public/uploads/<?= $searchCard->getPersonAnimalPhoto(); ?>" alt="photo">
          </div>

          <div class="search-container-cards-card-description">
            <div class="search-container-cards-card-description-person">
              <img src="public/img/person-avatar.svg" alt="person-icon" class="search-container-cards-card-description-person-icon">
              <span class="search-container-cards-card-description-person-name"><?= $searchCard->getPersonName(); ?></span>
              <span class="search-container-cards-card-description-person-age"><?= $searchCard->getPersonAge(); ?></span>
            </div>
            <div class="search-container-cards-card-description-animal">
              <img src="public/img/animal-avatar.svg" alt="animal-icon" class="search-container-cards-card-description-animal-icon">
              <span class="search-container-cards-card-description-animal-name"><?= $searchCard->getPersonAnimalName(); ?></span>
              <span class="search-container-cards-card-description-animal-age"><?= $searchCard->getPersonAnimalAge(); ?></span>
            </div>
            <div class="search-container-cards-card-description-city">
              <img src="public/img/pin.svg" alt="pin" class="search-container-cards-card-description-city-icon">
              <span class="search-container-cards-card-description-city-name"><?= $searchCard->getPersonCity(); ?></span>
            </div>
          </div>
          <div id="<?= $searchCard->getId() ?>" class="search-container-cards-card-reactions">
            <p class="search-container-cards-card-reactions-dislikes">
              <?= $searchCard->getPersonDislikes(); ?>
            </p>
            <img src="public/img/dislike.svg" alt="dislike" class="search-container-cards-dislike">
            <a href="/chat?room=<?= $searchCard->getId(); ?>">
              <img src="public/img/chat-reaction.svg" alt="chat" class="search-container-cards-chat">
            </a>
            <img src="public/img/like.svg" alt="like" class="search-container-cards-like">
            <p class="search-container-cards-card-reactions-likes">
              <?= $searchCard->getPersonLikes(); ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>