<?php
/**
 * Created by PhpStorm.
 * User: Vasilyev
 * Date: 24.04.2018
 * Time: 16:34
 */

class TmpAnswer {

    private $path;
    private $dataAnswer;

    public function setPathAnswer($path){
        return $this->path = $path;
    }

    private function setAnswer(){
        $this->dataAnswer = file_get_contents($this->path);
        $this->dataAnswer = json_decode($this->dataAnswer, true);
        return $this->dataAnswer;
}

    /**
     * @return mixed
     */
    public function getAnswer(int $id) {
        $this->setAnswer();
        return $this->dataAnswer["answer"][$id];
    }

}