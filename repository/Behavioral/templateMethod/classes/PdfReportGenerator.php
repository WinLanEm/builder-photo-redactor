<?php

namespace templateMethod\classes;

require_once 'AbstractReportGenerator.php';

class PdfReportGenerator extends AbstractReportGenerator
{
    function formatData(): void
    {
        echo "Сохранение в формате PDF\n";
    }

}