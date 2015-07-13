<?php

session_start();
include '../myClass/billClass.php';
include '../myClass/reportClass.php';

use Barla\billSystem as bill;
use Barla\reportSystem as report;

$Tonic = filter_input(INPUT_POST, 'Tonic');
$Soap = filter_input(INPUT_POST, 'Soap');
$Oil = filter_input(INPUT_POST, 'Oil');
$Kit = filter_input(INPUT_POST, 'Kit');
$Treatment = filter_input(INPUT_POST, 'Treatment');

$bill = new bill\billClass();
$report = new report\reportClass();

$bill->reportTonic($Tonic);
$report->reportTonic($Tonic);

$bill->reportSoap($Soap);
$report->reportSoap($Soap);

$bill->reportOil($Oil);
$report->reportOil($Oil);

$bill->reportKi($Kit);
$report->reportKit($Kit);

$bill->reportTreatment($Treatment);
$report->reportTreatment($Treatment);


header('Location: ../subMneu.php');
