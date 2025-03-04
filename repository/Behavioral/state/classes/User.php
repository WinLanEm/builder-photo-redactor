<?php

namespace state\classes;

use state\interfaces\RelationshipInterface;
use state\states\NotSubscribed;
use state\states\PendingSubscription;
use state\states\Subcription;

require_once __DIR__ . '/../interfaces/RelationshipInterface.php';
require_once __DIR__ . '/../states/NotSubscribed.php';
require_once __DIR__ . '/../states/PendingSubscription.php';
require_once __DIR__ . '/../states/Subcription.php';

class User
{
    private $name;
    private $state;

    public function __construct($name)
    {
        $this->name = $name;
        $this->state = new NotSubscribed();
    }

    public function setState(RelationshipInterface $state)
    {
        $this->state = $state;
    }

    public function viewProfile()
    {
        $this->state->viewProfile();
    }

    public function sendMessage(string $message)
    {
        $this->state->sendMessage($message);
    }

    public function subscribe(User $otherUser): void
    {
        echo "{$this->name} подписался на {$otherUser->name}.\n";
        $this->setState(new PendingSubscription());
    }

    public function acceptSubscription(User $otherUser): void
    {
        echo "{$this->name} подтвердил подписку на {$otherUser->name}.\n";
        $this->setState(new Subcription());
        $otherUser->setState(new Subcription());
    }
}