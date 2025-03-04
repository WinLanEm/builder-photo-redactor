<?php

use templateMethod\classes\DocxReportGenerator;
use templateMethod\classes\PdfReportGenerator;

require_once 'repository/Behavioral/templateMethod/classes/PdfReportGenerator.php';
require_once 'repository/Behavioral/templateMethod/classes/AbstractReportGenerator.php';
require_once 'repository/Behavioral/templateMethod/classes/DocxReportGenerator.php';

$pdfReportGenerator = new PdfReportGenerator();
$pdfReportGenerator->generateReport();

$docxReportGenerator = new DocxReportGenerator();
$docxReportGenerator->generateReport();