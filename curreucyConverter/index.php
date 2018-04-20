<?php


require 'page.php';
require "class/CurrencyConversion.php";
require "class/DataProcessing.php";
require "class/FileProcessing.php";
echo "<pre>";
print_r($_GET);
echo "</pre>";
$f_json = 'typeCurency.json';

$jsone = file_get_contents("$f_json");
echo '<pre>';
//echo var_dump($jsone);
echo "</pre>";
echo "<br />";
echo '<pre>';
$json = json_decode($jsone, true);
echo "</pre>";


