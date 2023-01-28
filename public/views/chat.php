<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/chat.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat / Petsh</title>
  <script src="public/js/darkMode.js" defer></script>
  <script src="public/js/chatRefresh.js" defer></script>
</head>

<body>
  <div class="chat-container">
    <?php include "public/views/components/navigation.php" ?>
    <div class="chat-container-main">
      <div class="chat-container-main-left">
        <?php foreach ($friendsList as $friend) : ?>
          <?php if ($friend->getId() == (int)($_GET['room'])) : ?>
            <div class="chat-container-main-left-user1-active">
              <a href="/chat?room=<?= $friend->getId(); ?>">
                <img class="chat-container-main-left-user1-photo" src="public/uploads/<?= $friend->getPersonPhoto(); ?>" alt="photo">
              </a>
            </div>
          <?php else : ?>
            <div class="chat-container-main-left-user1">
              <a href="/chat?room=<?= $friend->getId(); ?>">
                <img class="chat-container-main-left-user1-photo" src="public/uploads/<?= $friend->getPersonPhoto(); ?>" alt="photo">
              </a>
            </div>
          <?php endif ?>
        <?php endforeach; ?>
      </div>
      <div class="chat-container-main-right">
        <div id="chat" class="chat-container-main-right-messages">
          <?php foreach ($friendsMessage as $message) : ?>
            <div class="chat-container-main-right-messages-sender">
              <?php if ($message->getSenderId() == $_SESSION['id']) : ?>
                <div class="chat-container-main-right-messages-sender-message">
                  <p>
                    <?= $message->getMessageContent() ?>
                  </p>
                </div>
                <img class="chat-container-main-right-user-photo-sender" src="public/uploads/<?= $photo->getPhoto($message->getSenderId()); ?>" alt="photo">
              <?php endif ?>
            </div>
            <div class="chat-container-main-right-messages-receiver">
              <?php if ($message->getReceiverId() == $_SESSION['id']) : ?>
                <?php foreach ($friendsList as $friend) : ?>
                  <?php if ($friend->getId() == (int)($_GET['room'])) : ?>
                    <img class="chat-container-main-right-user-photo-receiver" src="public/uploads/<?= $friend->getPersonPhoto(); ?>" alt="photo">
                  <?php endif ?>
                <?php endforeach; ?>
                <div class="chat-container-main-right-messages-receiver-message">
                  <p>
                    <?= $message->getMessageContent() ?>
                  </p>
                </div>
              <?php endif ?>
            </div>
          <?php endforeach ?>
        </div>
        <form action="addMessage" class="chat-container-main-right-tools" method="post">
          <div class="chat-container-main-right-tools-enter">
            <input type="hidden" name="sender_id" value="<?= $_SESSION['id']; ?>">
            <input type="hidden" name="receiver_id" value="<?= (int)($_GET['room']); ?>">
            <input class="chat-container-main-right-tools-enter-new" type="text" name="message_content" placeholder="Enter a message..." autocomplete="off">
            <div class="chat-container-main-right-tools-enter-send">
              <input type="image" name="submit" src="public/img/send.svg" class="chat-container-main-right-tools-enter-send-icon">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>