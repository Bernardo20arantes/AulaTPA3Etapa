<?php
ini_set('default_charset', 'UTF-8');
require('FPDF/fpdf.php');

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial','B',16);
$pdf -> Cell(40,10,'Relatório Mensal');
$pdf -> Output();