<?php

class frmManage{
    public function viewQuestion(){

        require_once 'quiz_DB.php';
        $db=new dbQuestion();
        $db->retrieveForManage();

    }
}