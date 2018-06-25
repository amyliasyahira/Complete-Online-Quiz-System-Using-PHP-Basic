<?php

require_once 'quiz_FRM.php';
$frm=new frmQuiz();
$frm->answerQuiz();
    require_once 'quiz_CTR.php';
    $ctr=new ctrQuiz();
    $ctr->calcMark();



?>