<?php

require_once 'AbstractStrategy.php';

class TesterStrategy extends AbstractStrategy
{
    private $testerRate = 15;
    public function calc($user):float
    {
        return $this->getWorkDays() * $this->testerRate;
    }
}