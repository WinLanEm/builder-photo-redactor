<?php

namespace bridge\widgets;

use bridge\interfaces\WidgetRealizationInterface;

require_once 'WidgetAbstract.php';
require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';


class WidgetBigAbstraction extends WidgetAbstract
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
        $fullTitle = $this->getFullTitle();
        $description = $this->getRealization()->getDescription();
        return ['id' => $id, 'fullTitle' => $fullTitle, 'description' => $description];
    }

    private function getFullTitle()
    {
        return $this->getRealization()->getId()
            . "::::"
            . $this->getRealization()->getTitle();
    }
}