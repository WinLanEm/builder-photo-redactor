<?php

namespace state\states;

use state\interfaces\RelationshipInterface;

require_once __DIR__ . '/../interfaces/RelationshipInterface.php';

class Subcription implements RelationshipInterface
{
    public function viewProfile(): void
    {
        echo "Данные профиля\n";
    }

    public function sendMessage(string $message): void
    {
        echo "Сообщение $message отправленно";
    }

}