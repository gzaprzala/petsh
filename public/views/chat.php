<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat / Petsh</title>
</head>
<body>
  <div class="search-container">
    <div class="nav-container">
      <div class="nav-icons">
        <img
          class="lens"
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
          class="lens active"
          src="public/img/chat.svg"
          alt="chat"
          onclick="location.assign('chat')"
        />
      </div>
    </div>
    <div class="chat-container">
      <div class="left-chat-container">
        <div class="user-1">
          <img class="user-1-profile-pic" src="public/img/person-profile-pic.png" alt="profile-pic">
        </div>
      </div>
      <div class="right-chat-container">
        <div class="messages-container"></div>
        <div class="tools-container">
          <div class="enter-message">
            <div class="new-message">Enter a message...</div>
            <div class="send-message">
              <img class="send-icon" src="public/img/send.svg" alt="send">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-container-mobile">
      <div class="nav-icons">
        <img
          class="lens"
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
          class="chat active"
          src="public/img/chat-mobile.svg"
          alt="chat"
          onclick="location.assign('search')"
        />
      </div>
    </div>
  </div>
</body>
