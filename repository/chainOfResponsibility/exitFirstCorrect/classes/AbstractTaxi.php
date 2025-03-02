<?php

abstract class AbstractTaxi
{
    protected $next;

    public function setNext(AbstractTaxi $next)
    {
        $this->next = $next;
        return $next;
    }

    public function message()
    {
        if($this->status()){
            return;
        }else{
            $this->next->message();
        }
    }
    protected abstract function status();
}