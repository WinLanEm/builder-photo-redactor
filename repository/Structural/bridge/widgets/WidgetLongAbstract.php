<?php

namespace bridge\widgets;

use bridge\interfaces\WidgetRealizationInterface;

require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';
require_once 'WidgetAbstract.php';

class WidgetLongAbstract extends WidgetAbstract
{
    public function run(WidgetRealizationInterface $realization)
    {
        $this->setRealization($realization);
        $viewData = $this->getViewData();
        $this->viewLogic($viewData);
    }

    private function getViewData()
    {
        $id = $this->getRealization()->getId();
        $title = $this->getRealization()->getTitle();
        $description = $this->getSmallDescription();
        return ['id' => $id, 'title' => $title, 'description' => $description];
    }

    private function getSmallDescription()
    {
        return $this->getRealization()->getDescription() . " в сети";
    }
}