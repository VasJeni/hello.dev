<?php
class Question {
    private $question=[];
    private $idQuestion;



    public function setQuestion($pathToQuestionJson) {
        $this->question = file_get_contents($pathToQuestionJson);
        $this->question = json_decode($this->question, true) ;
        return $this->question;
    }

    /**
     * @return mixed
     */
    public function getQuestion($id) {

        return $this->question["question"][$id];
    }

    /**
     * @return mixed
     */
    public function getIdQuestion() {
        return $this->idQuestion;
    }



}