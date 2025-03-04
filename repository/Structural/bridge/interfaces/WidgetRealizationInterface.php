<?php

namespace bridge\interfaces;
interface WidgetRealizationInterface
{
    public function getId(): int;

    public function getTitle(): string;

    public function getDescription(): string;
}