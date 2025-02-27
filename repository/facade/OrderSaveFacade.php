<?php
require_once __DIR__ . '/subSystem/OrderSaveData.php';
require_once __DIR__ . '/subSystem/OrderSaveProducts.php';
require_once __DIR__ . '/subSystem/OrderSaveUser.php';

class OrderSaveFacade
{
    public function save($request)
    {
        (new OrderSaveData($request))->run();
        (new OrderSaveProducts($request))->run();
        (new OrderSaveUser($request))->run();

        return true;
    }
}