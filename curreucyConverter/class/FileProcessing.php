<?php
/**
 * Created by PhpStorm.
 * User: Vasilyev
 * Date: 18.04.2018
 * Time: 10:40
 */

//namespace FileProcessing;

class FileProcessing {

    var $arr = [];
    var $JsonWay;

    public function readJsone($way): array {
        $this->arr=(file_get_contents($way));
        $this->arr= (json_decode($this->arr,true ));
        return $this->arr;
    }
}
