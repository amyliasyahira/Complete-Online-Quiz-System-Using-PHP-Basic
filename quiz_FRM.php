<?php

require_once '_connection.php';
class frmQuiz{

    public function answerQuiz(){
        require_once 'quiz_DB.php';
        $db = new dbQuestion();
        $db->retrieveForAnswer();
    }
}