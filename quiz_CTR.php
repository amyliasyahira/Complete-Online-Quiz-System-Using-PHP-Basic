<?php
class ctrQuiz
{

    public function calcMark()
    {

        require_once "_connection.php";
        $countTrue = 0;
        $a=1;
        if (isset($_POST["submit1"])) {
            ob_end_clean();
            while($a<=$_POST["count"]){
                $sql7 = "select * from quiz";
                $query7 = mysql_query($sql7);
                while($row7 = mysql_fetch_array($query7)){
                    if($_POST["id$a"]==$row7["id"]){
                        if (isset($_POST["ans$a"])) {
                            if ($_POST["ans$a"] == $row7["trueAns"]) {
                                $countTrue++;
                                break;
                            }
                        }
                    }
                }
                $a++;
            }

            //return result (display full result)
            echo "<br><table align=center><tr><td><h3>You got " . $countTrue . " true answer from " . $_POST["count"] . " questions !</h3></td></tr></table>";

            $c=1;
            echo "<table border=0 width=90% align=center>";
            while($c<=$_POST["count"]){
                $sql8 = "select * from quiz";
                $query8 = mysql_query($sql8);
                while($row8 = mysql_fetch_array($query8)){
                    if($_POST["id$c"]==$row8["id"]){
                        echo "<tr bgcolor=#eee8aa><td>&nbsp&nbspQuestion $c)</td>";
                        echo "<tr><td>&nbsp&nbsp". $row8["question"] . "</td></tr>";
                        echo "<tr><td>&nbsp</td></tr>";
                        if (isset($_POST["ans$c"])) {
                            if ($_POST["ans$c"] == $row8["trueAns"]) {
                                if ($_POST["ans$c"] == $row8['answer1']) {
                                    echo "<tr><td><font color=green>&nbsp&nbsp" . $row8['answer1'] . "    ~Your Answer~</font>";
                                    echo "<br>&nbsp&nbsp" . $row8['answer2'] . "";
                                } elseif ($_POST["ans$c"] == $row8['answer2']) {
                                    echo "<tr><td>&nbsp&nbsp" . $row8['answer1'] . "";
                                    echo "<br><font color=green>&nbsp&nbsp" . $row8['answer2'] . "    ~Your Answer~</font>";
                                }
                            }
                            elseif ($_POST["ans$c"] != $row8["trueAns"]) {
                                if ($_POST["ans$c"] == $row8['answer1']) {
                                    echo "<tr><td>&nbsp&nbsp" . $row8['answer1'] . "<font color=red>    ~Your Answer~</font>";
                                    echo "<br><font color=green>&nbsp&nbsp" . $row8['answer2'] . "</font>";
                                } elseif ($_POST["ans$c"] == $row8['answer2']) {
                                    echo "<tr><td><font color=green>&nbsp&nbsp" . $row8['answer1'] . "</font>";
                                    echo "<br>&nbsp&nbsp" . $row8['answer2'] . "<font color=red>    ~Your Answer~</font>";
                                }
                            }
                        }
                        else{
                            if ($row8['trueAns'] == $row8['answer1']) {
                                echo "<tr><td><font color=green>&nbsp&nbsp" . $row8['answer1'] . "</font><font color=red>    ~Not Answered~</font>";
                                echo "<br>&nbsp&nbsp" . $row8['answer2'] . "";
                            } elseif ($row8['trueAns'] == $row8['answer2']) {
                                echo "<tr><td>&nbsp&nbsp" . $row8['answer1'] . "";
                                echo "<br><font color=green>&nbsp&nbsp" . $row8['answer2'] . "</font><font color=red>    ~Not Answered~</font>";
                            }
                        }
                        break;
                    }
                }
                $c++;
            }
            echo "</table>";

            /*----------------------------------------------------------------------------------------------------*/
            ?>
            <table align="center"><tr><td><a href='../OnlineQuiz/index.php'><input type=button value=Done></a></td></tr></table>



            <td width=20% bgcolor="black" rowspan=1>
                    <!-----------Right----------->
                </td>
            </tr>


        </table>
            <?php
        }
    }
    /*----------------------------------------------------------------------------------------------------------*/




}