<?php

namespace templateMethod\classes;

require_once 'AbstractReportGenerator.php';

class DocxReportGenerator extends AbstractReportGenerator
{
    function formatData(): void
    {
        echo "Сохранение в формета docx\n";
    }

}