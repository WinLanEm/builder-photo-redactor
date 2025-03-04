<?php

namespace state\interfaces;
interface RelationshipInterface
{
    public function viewProfile(): void;

    public function sendMessage(string $message): void;
}