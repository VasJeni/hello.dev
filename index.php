<?php
$counterQouestion=0;
$counterQouestion++;
echo $counterQouestion;
echo "<br>";

$questionPath='QuestionData/qouestion.json';
$answerPath = 'QuestionData/answer.json';
require 'class/Question.php';
require 'class/TmpAnswer.php';
$question = new Question();
$question->setQuestion($questionPath);
$random = (random_int(0,19));
echo $random;
require 'View/pageWithQuestion.php';

$answerTmp = new TmpAnswer();
$answerTmp->setPathAnswer($answerPath);
$answer = $answerTmp->getAnswer($random);
var_dump($_POST);
echo "<br>";

var_dump($answer);
echo "<br>";


if ($answer == $_POST['answer']){
    echo "<you win>";
} else {
    echo '<you lose>';
}




//var_dump($_POST);