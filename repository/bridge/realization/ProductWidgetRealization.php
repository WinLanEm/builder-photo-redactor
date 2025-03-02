<?php

require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';
require_once __DIR__ . '/../objects/Product.php';

class ProductWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Product $product)
    {
        $this->entity = $product;
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
        return $this->entity->description;
    }
}