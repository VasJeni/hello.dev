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

    public function readJsone($path): array {
        $this->arr=(file_get_contents($path));
        $this->arr= (json_decode($this->arr,true ));
        return $this->arr;
    }
}
