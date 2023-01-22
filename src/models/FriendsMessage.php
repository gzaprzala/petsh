<?php

class FriendsMessage {
  private $sender_id;
  private $receiver_id;
  private $message_content;

  public function __construct(int $sender_id, int $receiver_id, string $message_content) {
    $this->sender_id = $sender_id;
    $this->receiver_id = $receiver_id;
    $this->message_content = $message_content;
  }

  public function getSenderId(): int {
    return $this->sender_id;
  }

  public function getReceiverId(): int {
    return $this->receiver_id;
  }

  public function getMessageContent(): string {
    return $this->message_content;
  }
}
