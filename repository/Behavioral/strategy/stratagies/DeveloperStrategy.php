<?php

namespace strategy\stratagies;

require_once 'AbstractStrategy.php';

class DeveloperStrategy extends AbstractStrategy
{
    private $developerRate = 30;

    public function calc($user): float
    {
        return $this->getWorkDays() * $this->developerRate;
    }

}