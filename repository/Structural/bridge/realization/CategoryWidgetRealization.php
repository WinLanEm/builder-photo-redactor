<?php

namespace bridge\realization;

use bridge\interfaces\WidgetRealizationInterface;
use bridge\objects\Category;

require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';
require_once __DIR__ . '/../objects/Category.php';

class CategoryWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Category $category)
    {
        $this->entity = $category;
    }

    public function getId(): int
    {
        return $this->entity->id;
    }

    public function getTitle(): string
    {
        return $this->entity->title;
    }

    public function getDescription(): string
    {
        return $this->entity->description;
    }
}