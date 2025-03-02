<?php

require_once __DIR__ . '/models/Ingredient.php';
require_once __DIR__ . '/models/Order.php';
require_once __DIR__ . '/models/Product.php';

//Я понимаю что это godObject и так сделано намеренно, ведь это лишь пример заполнения рандомными данными
//Никакого практического смысла эта ObjectFactory не несет, максимум что в ней показано это как создаются
//Обьекты классов и им назначаются свойства, очевидно, что в реальном проекте логика изменится
class ObjectsFactory
{
    private $randomNames = ['karas','bulka','json','kris','xleb','cook','maionez'];

    public function createIngredients(int $count):array
    {
        $result = [];
        for($i=1;$i<=$count;$i++){
            $result[] = $this->createIngredient($i);
        }
        return $result;
    }
    private function createIngredient(int $id)
    {
        $obj = new Ingredient();
        $obj->setId($id);
        $obj->setName($this->randomNames[array_rand($this->randomNames)]);
        return $obj;
    }
    public function createProducts(int $count,array $ingredients):array
    {
        $result = [];
        for($i=1;$i<=$count;$i++){
            $randomKeys = array_rand($ingredients);
            $productIngredients[] = $ingredients[$randomKeys];
            $result[] = $this->createProduct($i,$productIngredients);
        }
        return $result;
    }
    private function createProduct(int $id,array $ingredients)
    {
        $obj = new Product();
        $obj->setId($id);
        $obj->setName(array_rand($this->randomNames));

        foreach ($ingredients as $ingredient){
            $obj->setChildItem($ingredient);
        }
        return $obj;
    }
    public function createOrders(int $count,array $products):array
    {
        $result = [];
        for($i=1;$i<=$count;$i++){
            $randomKeys = array_rand($products);
            $orderProducts[] = $products[$randomKeys];
            $result[] = $this->createOrder($i,$orderProducts);
        }
        return $result;
    }
    private function createOrder(int $id,array $children)
    {
        $obj = new Order();
        $obj->setId($id);
        $obj->setName("Order{$id}");
        foreach ($children as $child){
            $obj->setChildItem($child);
        }
        return $obj;
    }

}