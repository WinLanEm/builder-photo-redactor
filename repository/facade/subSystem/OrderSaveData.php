<?php

class OrderSaveData
{
    private $request;
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function run()
    {
        $dateTime = isset($this->request['data'])?$this->request['data']:"";
        echo $dateTime;
        //эхо сделано для проверки работы
    }
}