<?php
/**
 * Created by PhpStorm.
 * User: Geomanser
 * Date: 15.04.2018
 * Time: 6:41
 */

//qualification

 $price =100;

 require "validation.php" ;
 require "index.php";

switch ($country){
    case 'Туречина' :
        $qualification = 0;
        break;
    case 'Єгипет' :
        $qualification = 0.1;
        break;
    case 'Італія':
        $qualification = 0.2;
        break;


$totalCost = ($price  + ($price*$qualification)) - (($price  + ($price*$qualification))/$discount);
}
if (!$totalCost){
    $totalCost='0';
}
