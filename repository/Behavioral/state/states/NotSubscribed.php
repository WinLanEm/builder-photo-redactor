<?php

namespace state\states;

use state\interfaces\RelationshipInterface;

require_once __DIR__ . '/../interfaces/RelationshipInterface.php';

class NotSubscribed implements RelationshipInterface
{
    public function viewProfile(): void
    {
        echo "Профиль скрыт, подпишитесь для просмотра\n";
    }

    public function sendMessage(string $message): void
    {
        echo "Сообщения можно писать только друзьям\n";
    }

}