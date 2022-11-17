<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search / Petsh</title>
</head>
<body>
  <div class="search-container">
    <div class="nav-container">
      <div class="nav-icons">
        <img
          class="lens active"
          src="public/img/lens.svg"
          alt="lens"
          onclick="location.assign('search')"
        />
        <img
          class="profile"
          src="public/img/profile.svg"
          alt="profile"
          onclick="location.assign('search')"
        />
        <img
          class="chat"
          src="public/img/chat.svg"
          alt="chat"
          onclick="location.assign('search')"
        />
      </div>
    </div>
    <div class="cards-container">
      <img class="dislike" src="public/img/dislike.svg" alt="dislike" />
      <div class="card">
        <div class="photos">
          <img class="person" src="public/img/person.png" alt="person" />
          <img class="animal" src="public/img/animal.png" alt="animal" />
        </div>
        <div class="description">
          <div class="person-info">
            <img
              class="person-avatar"
              src="public/img/person-avatar.svg"
              alt="person-avatar"
            />
            <span class="person-name">Matthew</span>
            <span class="person-age">25</span>
          </div>
          <div class="animal-info">
            <img
              class="animal-avatar"
              src="public/img/animal-avatar.svg"
              alt="animal-avatar"
            />
            <span class="animal-name">Bart</span>
            <span class="animal-age">8</span>
          </div>
          <div class="city-info">
            <img class="pin" src="public/img/pin.svg" alt="pin" />Cracow
          </div>
        </div>
      </div>
      <img class="like" src="public/img/like.svg" alt="like" />
      <div class="likes-mobile">
        <img
          class="dislike-mobile"
          src="public/img/dislike.svg"
          alt="dislike-mobile"
        />
        <img class="like-mobile" src="public/img/like.svg" alt="like-mobile" />
      </div>
    </div>
    <div class="nav-container-mobile">
      <div class="nav-icons">
        <img
          class="lens active"
          src="public/img/lens-mobile.svg"
          alt="lens"
          onclick="location.assign('search')"
        />
        <img
          class="profile"
          src="public/img/profile-mobile.svg"
          alt="profile"
          onclick="location.assign('search')"
        />
        <img
          class="chat"
          src="public/img/chat-mobile.svg"
          alt="chat"
          onclick="location.assign('search')"
        />
      </div>
    </div>
  </div>
</body>
