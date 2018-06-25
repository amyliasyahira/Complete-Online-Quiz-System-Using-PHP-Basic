<?php
class ctrCreate{
    public function getQuestion(){
        $q = $_POST["question"];
        return $q;
    }
    public function getAnswer1(){
        $a1 = $_POST["answer1"];
        return $a1;
    }
    public function getAnswer2(){
        $a2 = $_POST["answer2"];
        return $a2;
    }
    public function getTrueAns(){
        $ta=$this->getAnswer1();
        if($_POST["trueAns"] == "answer2"){$ta=$this->getAnswer2();}
        return $ta;
    }


}