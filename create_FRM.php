<?php


class frmCreate{
    public function createQuestion(){
        ?>
        <table width="100%" height="100%" border=1 cellpadding="0" cellspacing="0" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;" >

            <tr height=10%>

                <td width=20% bgcolor="black" rowspan=1>
                    <!--------------------------------------------------------left--------------------------------------------------------->

                    <!--------------------------------------------------------Left--------------------------------------------------------->
                </td>
                <td height="85%">
                    <!-------------------------------------------------------Content------------------------------------------------------->
                    <table border=0 width=90% align=center>
                        <form method="post">
                            <tr bgcolor=#ffc0cb><td colspan=2>&nbsp&nbspCreate New Question</td></tr>

                            <tr>
                                <td width=20%>&nbsp&nbspQuestion</td>
                                <td><input type="text" size=80% name="question"></td>
                            </tr>
                            <tr>
                                <td>&nbsp&nbspAnswer 1</td>
                                <td><input type="text" size=80% name="answer1"></td>
                            </tr>
                            <tr>
                                <td>&nbsp&nbspAnswer 2</td>
                                <td><input type="text" size=80% name="answer2"></td>
                            </tr>
                            <tr>
                                <td>&nbsp&nbspTrue Answer</td>
                                <td><select name="trueAns">
                                        <option value=answer1>Answer1
                                        <option value=answer2>Answer2</td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit4" value="Submit">
                                <input type="submit" name="back9" value="Cancel"></td>
                            </tr>
                        </form>
                    </table>
                    <!-------------------------------------------------------Content------------------------------------------------------->
                </td>

                <td width=20% bgcolor="black" rowspan=1>
                    <!-----------Right----------->
                </td>
            </tr>


        </table>

        <?php
        if(isset($_POST["submit4"])){
            $this->validateInput();
        }

        if(isset($_POST["back9"])){
            header ('location:AdminIndex.php');
        }
    }
    public function validateInput(){
        require_once 'create_CTR.php';
        $ctrCreate = new ctrCreate();
        if($ctrCreate->getQuestion()==""){
            ?>
            <script languange=javascript>
                alert("Please fill in question !");
            </script>
            <?php
        }
        elseif($ctrCreate->getAnswer1()==""){
            ?>
            <script languange=javascript>
                alert("Please fill in answer 1 !");
            </script>
            <?php
        }
        elseif($ctrCreate->getAnswer2()==""){
            ?>
            <script languange=javascript>
                alert("Please fill in answer 2 !");
            </script>
            <?php
        }
        elseif($ctrCreate->getTrueAns()==""){
            ?>
            <script languange=javascript>
                alert("Please fill in true answer !");
            </script>
            <?php
        }
        else{
            require_once 'quiz_DB.php';
            $db = new dbQuestion();
            $db->storeQuestion($ctrCreate->getQuestion(), $ctrCreate->getAnswer1(), $ctrCreate->getAnswer2(), $ctrCreate->getTrueAns());
        }
    }
}