<?php

function checking($array){

    foreach ($array as $item => $value) {
        $array[$item] = trim($array[$item]);
        $array[$item] = stripcslashes($array[$item]);
        $array[$item] = htmlspecialchars($array[$item]);
    }
    return $array;
}

