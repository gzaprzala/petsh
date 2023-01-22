<?php

require_once __DIR__ . '/Repository.php';
require_once __DIR__ . '/../models/FriendsMessage.php';

class FriendsMessagesRepository extends Repository {
  public function getFriendsMessages(int $sender_id, int $receiver_id): array {
    $stmt = $this->database->connect()->prepare('
      SELECT message_content, sender_id, receiver_id FROM users_messages
      WHERE (sender_id = :sender_id AND receiver_id = :receiver_id)
      OR (sender_id = :receiver_id AND receiver_id = :sender_id)
      ORDER BY id ASC
    ');

    $stmt->bindParam(':sender_id', $sender_id, PDO::PARAM_INT);
    $stmt->bindParam(':receiver_id', $receiver_id, PDO::PARAM_INT);
    $stmt->execute();

    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $friendsMessages = [];

    foreach ($messages as $message) {
      $friendsMessages[] = new FriendsMessage(
        $message['sender_id'],
        $message['receiver_id'],
        $message['message_content'],
      );
    }

    return $friendsMessages;
  }

  public function addFriendsMessage(FriendsMessage $friendsMessage): void {
    $stmt = $this->database->connect()->prepare('
      INSERT INTO users_messages (sender_id, receiver_id, message_content)
      VALUES (?, ?, ?)
    ');

    $stmt->execute([
      $friendsMessage->getSenderId(),
      $friendsMessage->getReceiverId(),
      $friendsMessage->getMessageContent(),
    ]);
  }
}
