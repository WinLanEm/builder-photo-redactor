<?php

namespace templateMethod\classes;
abstract class AbstractReportGenerator
{
    final public function generateReport(): void
    {
        $this->collectData();
        $this->formatData();
        $this->saveReport();
    }

    private function collectData()
    {
        echo "Сбор данных...\n";
    }

    private function saveReport()
    {
        echo "Сохранение отчета...\n";
    }

    abstract function formatData(): void;
}