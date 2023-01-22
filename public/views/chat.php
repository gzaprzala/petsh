<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="public/css/views/chat.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat / Petsh</title>
</head>

<body>
  <div class="chat-container">
    <?php include "public/views/components/navigation.php" ?>
    <div class="chat-container-main">
      <div class="chat-container-main-left">
        <?php foreach ($friendsList as $friend) : ?>
          <div class="chat-container-main-left-user1">
            <a href="/chat?room=<?= $friend->getId(); ?>">
              <img class="chat-container-main-left-user1-photo" src="public/uploads/<?= $friend->getPersonPhoto(); ?>" alt="photo">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="chat-container-main-right">
        <div class="chat-container-main-right-messages">
          <?php foreach ($friendsMessage as $message) : ?>
            <?php if ($message->getSenderId() == $_SESSION['id']) : ?>
              <p><?= $message->getMessageContent() ?></p>
            <?php endif ?>
            <?php if ($message->getReceiverId() == $_SESSION['id']) : ?>
              <p><?= $message->getMessageContent() ?></p>
            <?php endif ?>
          <?php endforeach ?>
        </div>
        <form action="addMessage" class="chat-container-main-right-tools" method="post">
          <div class="chat-container-main-right-tools-enter">
            <input type="hidden" name="sender_id" value="<?= $_SESSION['id']; ?>">
            <input type="hidden" name="receiver_id" value="<?= (int)($_GET['room']); ?>">
            <input class="chat-container-main-right-tools-enter-new" type="text" name="message_content" placeholder="Enter a message...">
            <div class="chat-container-main-right-tools-enter-send">
              <input type="image" name="submit" src="public/img/send.svg" class="chat-container-main-right-tools-enter-send-icon">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="public/js/darkMode.js"></script>
</body>

</html>