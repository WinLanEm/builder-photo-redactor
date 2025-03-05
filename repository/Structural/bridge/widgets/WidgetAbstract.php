<?php

namespace bridge\widgets;

use bridge\interfaces\WidgetRealizationInterface;

require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';


abstract class WidgetAbstract
{
    private $realization;

    /**
     * @return mixed
     */
    public function getRealization()
    {
        return $this->realization;
    }

    /**
     * @param mixed $realization
     */
    public function setRealization(WidgetRealizationInterface $realization): void
    {
        $this->realization = $realization;
    }

    protected function viewLogic($viewData)
    {
        $method = static::class . " : " . __FUNCTION__;
        echo $method;
        print_r($viewData);
        //В реальном проекте очевидно нет echo, но как пример сделаю так
    }
    abstract function run(WidgetRealizationInterface $realization);
}