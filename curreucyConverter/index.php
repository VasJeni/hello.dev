<?php
require 'page.php';
require "class/CurrencyConversion.php";
require "class/DataProcessing.php";
require "class/FileProcessing.php";
if (isset($_GET)) {
    $json = new FileProcessing();
    $converse = new CurrencyConversion();
    $first = new DataProcessing();
    $data = $first->process($_GET);
    $first->checkAllNumbers($data);
    if ($first->normal){
            $converse->Conversion(
                $json->readJsone('typeCurency.json',true),
                $data['sale'], $data['buy'],
                $data['amount']);
        } else {
            $converse->total = "invalid number";
        }
    }
    if (is_numeric($converse->total)){
        $converse->total = round($converse->total ,2);
    }
    echo ($converse->total);