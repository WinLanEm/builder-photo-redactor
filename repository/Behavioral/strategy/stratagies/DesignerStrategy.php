<?php

namespace strategy\stratagies;

require_once 'AbstractStrategy.php';

class DesignerStrategy extends AbstractStrategy
{
    private $designerRate = 20;

    public function calc($user): float
    {
        return $this->getWorkDays() * $this->designerRate;
    }

}