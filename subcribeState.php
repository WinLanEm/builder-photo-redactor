<?php

use state\classes\User;

require_once __DIR__ . '/repository/Behavioral/state/classes/User.php';

$bob = new User('Bob');
$sam = new User('Sam');

$bob->viewProfile();
$sam->sendMessage('Ку');

$sam->subscribe($bob);

$sam->viewProfile();
$sam->sendMessage('Как дела');
$sam->sendMessage('Как дела');

$bob->acceptSubscription($sam);

$sam->viewProfile();
$sam->sendMessage('Как дела');

$bob->viewProfile();
