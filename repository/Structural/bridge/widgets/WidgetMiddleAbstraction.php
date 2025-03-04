<?php

namespace bridge\widgets;

use bridge\interfaces\WidgetRealizationInterface;

require_once 'WidgetAbstract.php';
require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';

class WidgetMiddleAbstraction extends WidgetAbstract
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
        $middleTitle = $this->getMiddleTitle();
        $description = $this->getRealization()->getDescription();

        return ['id' => $id, 'middleTitle' => $middleTitle, 'description' => $description];
    }

    private function getMiddleTitle()
    {
        return $this->getRealization()->getId()
            . "->"
            . $this->getRealization()->getTitle();
    }
}