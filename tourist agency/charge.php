<?php
/**
 * Created by PhpStorm.
 * User: Geomanser
 * Date: 15.04.2018
 * Time: 6:41
 */
//qualification
function charge($arr): int {
    $price = 100;
    if (isset($arr['country'])) {
        switch ($arr['country']) {
            case "Туречина":
                $index = 0;
                break;
            case  "Єгипет" :
                $index = 0.1;
                break;
            case "Італія" :
                $index = 0.2;
        }
    } else {
        $index = 0;
        echo 'Укажите страну <br />';
    }
    foreach ($arr as $key => $value) {
        if ($key == 'discount') {
            $discount = 0.05;
        } else {
            $discount = 0;
        }
    }
    if (isset($arr['numberDays'])) {
        if ($arr['numberDays'] > 0) {
            $numberDays = $arr['numberDays'];
        } else {
            $numberDays = 0;
        }
    } else {
        $numberDays = 0;
        echo 'Укажите количество дней <br />';
    }
    $totalCost = $price * $numberDays + ($price * $numberDays * $index) - ((($price * $numberDays) + ($price * $numberDays * $index)) * $discount);
    return $totalCost;
}

function charge2(int $param) {
    //
}

