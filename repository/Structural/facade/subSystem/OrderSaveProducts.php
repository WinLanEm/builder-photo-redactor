<?php

namespace facade\subSystem;
class OrderSaveProducts
{
    private array $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function run()
    {
        $product = isset($this->request['product']) ? $this->request['product'] : "";
        echo $product;
        //эхо сделано для проверки работы
    }
}