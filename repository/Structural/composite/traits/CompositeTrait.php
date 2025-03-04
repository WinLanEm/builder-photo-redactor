<?php

namespace composite\traits;

use composite\interfaces\CompositeItemInterface;

require_once __DIR__ . '/../interfaces/CompositeItemInterface.php';

trait CompositeTrait
{
    private $compositeItems = [];

    public function setChildItem(CompositeItemInterface $item)
    {
        $this->compositeItems[] = $item;
    }

    public function calcPrice(): float
    {

        $this->price = 0;
        foreach ($this->compositeItems as $compositeItem) {
            $this->price += $compositeItem->calcPrice();
        }
        return $this->price;

    }
}