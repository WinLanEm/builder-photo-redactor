<?php

namespace composite\models;

use composite\interfaces\CompositeInterface;
use composite\traits\CompositeTrait;

require_once __DIR__ . '/../interfaces/CompositeInterface.php';
require_once __DIR__ . '/../traits/CompositeTrait.php';

class Product implements CompositeInterface
{
    use CompositeTrait;

    public $type = 'Продукт';

    private $id;
    private $name;
    private $price;

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
}