<?php

function validationCountry ($country)
{
    $counter=0;
    $ACountys = ['Туречина', 'Єгипет', 'Італія'];
    for ($i=1; 1<count($ACountys); $i++ ){
        if ($country === $ACountys[$i]) {
            $counter++;
        }
    }
    if ($counter == 1)
    {
        return true;
    } else {
        return false;
    }
};

function correctDay ($numberOfDays)
{
    if (is_numeric($numberOfDays) && ($numberOfDays>0)) {
        return true;
    } else {
        return false;
    }
}
$data = $_POST;
var_dump($data);


if (validationCountry($data['country'])){
    $country = $data['country'];
};
/*
if (correctDay($data['numberDays'])){
    $numberDays = $data['numberDays'];
};

echo $numberDays . ' '. $country;

/*
if ($data['discount']) {
    $discount = 0.5;
} else {
    $discount = 0;
};
echo $discount;


/*
$price =100;

//require "validation.php" ;
//require "index.php";

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

echo $totalCost;*/
