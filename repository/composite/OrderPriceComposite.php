<?php

require_once 'ObjectsFactory.php';

class OrderPriceComposite
{
    private $factory;
    private $ingredientsCount = 10;
    private $ingredients = [];

    private $productCount = 5;
    private $products = [];

    private $orderCount = 2;
    private $orders = [];

    public function __construct()
    {
        $this->factory = new ObjectsFactory();
    }

    public function run()
    {
        $this->initObjects();
        $this->calcPrices();
    }
    private function initObjects()
    {
        $this->ingredients = $this->factory->createIngredients($this->ingredientsCount);
        $this->products = $this->factory->createProducts($this->productCount,$this->ingredients);
        $this->orders = $this->factory->createOrders($this->orderCount,$this->products);
    }
    private function calcPrices()
    {
        $result = [];
        foreach ($this->orders as $order){
            $result[] = [
                'order_id' => $order->getId(),
                'order_price' => $order->calcPrice(),
            ];
        }
        echo "<pre>";
        print_r($this->orders);
        echo "<pre>";
    }
}