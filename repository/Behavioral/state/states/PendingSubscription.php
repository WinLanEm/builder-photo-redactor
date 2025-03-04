<?php

namespace state\states;

use state\interfaces\RelationshipInterface;

require_once __DIR__ . '/../interfaces/RelationshipInterface.php';

class PendingSubscription implements RelationshipInterface
{
    private bool $sendMessage = false;

    public function viewProfile(): void
    {
        echo "Подождите пока пользователь добавит вас в друзья\n";
    }

    public function sendMessage(string $message): void
    {
        if (!$this->sendMessage) {
            echo "Сообщений $message отправленно\n";
            $this->sendMessage = true;
        } else {
            echo "Вы уже отправили одно сообщение\n";
        }
    }

}