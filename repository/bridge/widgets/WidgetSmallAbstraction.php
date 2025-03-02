<?php

require_once 'WidgetAbstract.php';
require_once __DIR__ . '/../interfaces/WidgetRealizationInterface.php';

class WidgetSmallAbstraction extends WidgetAbstract
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
        $smallTitle = $this->getSmallTitle();
        return ['id' => $id,'smallTitle' => $smallTitle];
    }
    private function getSmallTitle()
    {
        return substr($this->getRealization()->getTitle(),0,5) . '...';
    }
}