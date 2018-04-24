<?php
/**
 * Created by PhpStorm.
 * User: Vasilyev
 * Date: 24.04.2018
 * Time: 16:28
 */

class FormValidation {

    private $data;

    /**
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void {
        $this->data = $data;
    }

}