<?php
class DataProcessing {

    public function process($array) {
        foreach ($array as $item => $value) {
            $array[$item] = trim($array[$item]);
            $array[$item] = stripcslashes($array[$item]);
            $array[$item] = htmlspecialchars($array[$item]);
            return $array;
        }
    }


    var $normal = true;

    public function checkAllNumbers($arr) {
        foreach ($arr as $key => $value) {
            if ((!is_numeric($value)) || ($value<0)) {
                $this->normal = false;
            }
        }
        return $arr;
    }
}
