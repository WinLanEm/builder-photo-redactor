<?php



class OrderSaveUser
{
    private array $request;
    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function run()
    {
        $username = isset($this->request['username'])?$this->request['username']:"";
        echo $username;
        //эхо сделано для проверки работы
    }
}