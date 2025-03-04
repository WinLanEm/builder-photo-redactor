<?php

namespace composite\models;

use composite\interfaces\CompositeItemInterface;

require_once __DIR__ . '/../interfaces/CompositeItemInterface.php';

class Ingredient implements CompositeItemInterface
{
    private $type = "Ингридиент";

    private $id;
    private $name;
    private $price;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }


    public function calcPrice(): float
    {
        if ($this->price) {

            return $this->price;
        }
        $this->price = [10, 20, 30, 40, 50][array_rand([10, 20, 30, 40, 50])];

        return $this->price;
    }
}