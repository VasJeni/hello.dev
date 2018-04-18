<?php
/**
 * Created by PhpStorm.
 * User: Vasilyev
 * Date: 18.04.2018
 * Time: 10:39
 */

//namespace DataProcessing;
$arr = [12,4,6,4214,654646, '<dfsfsdfsf'];

class DataProcessing {

    public function process($array) {
        foreach ($array as $item => $value) {
            $array[$item] = trim($array[$item]);
            $array[$item] = stripcslashes($array[$item]);
            $array[$item] = htmlspecialchars($array[$item]);
            return $array;
        }
    }
}

$one = new DataProcessing();
$array = $one->process($arr);
print_r($array);