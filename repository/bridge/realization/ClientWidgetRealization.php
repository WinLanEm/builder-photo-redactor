<?php

require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';
require_once __DIR__ . '/../objects/Client.php';

class ClientWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Client $client)
    {
        $this->entity = $client;
    }

    public function getId(): int
    {
        return $this->entity->id;
    }

    public function getTitle(): string
    {
        return $this->entity->name;
    }

    public function getDescription(): string
    {
        return $this->entity->bio;
    }

}