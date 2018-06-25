<?php

require_once '_connection.php';


class dbQuestion{

    public function storeQuestion($q,$a1,$a2,$ta){
        require_once '_connection.php';
        $sql2 = "INSERT INTO quiz(question,answer1,answer2,trueAns)
				values('".$q."','".$a1."','".$a2."','".$ta."')";
        $result = mysql_query($sql2) or die (mysql_error());

        //return result
        if($result){
            echo "<meta http-equiv=\"refresh\"content=\"0.00001;URL=manage_INDEX.php\"/>";
            ?>
            <script languange=javascript>
                alert("Question Successfully Created !");
            </script>
            <?php
        }
        else{
            ?>
            <script languange=javascript>
                alert("Create failed !");
            </script>
            <?php
        }

    }

    public function retrieveForAnswer(){
        ?>
        <table width="100%" height="100%" border=1 cellpadding="0" cellspacing="0" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;" >



            <tr height=10%>

                <td width=20% bgcolor="black" rowspan=1>
                    <!--------------------------------------------------------left--------------------------------------------------------->

                    <!--------------------------------------------------------Left--------------------------------------------------------->
                </td>
                <td height="85%">
                    <!-------------------------------------------------------Content------------------------------------------------------->
                    <?php

                    $no = array();
                    $a=0;
                    $sql5 = "SELECT * FROM quiz ORDER BY rand() limit 10";
                    $result5 = mysql_query($sql5);
                    ob_start();

                    //return result
                    while ($row5 = mysql_fetch_assoc($result5)) {
                        $no[$a] = $row5["id"];
                        $q=$no[$a];
                        $a++;
                        echo "<table name=2 border=0  align=center cellpadding=0 width=90%>";
                        echo "<form name=quizfrm method=post>";
                        //echo "<tr><td><input type=hidden name=sortq$a value=num$a></td></tr>";
                        echo "<br><tr bgcolor=#b7e1dd>";
                        echo "<td>&nbsp&nbspQuestion ".$a.")</td></tr><tr>";
                        echo "<td><br>&nbsp&nbsp"  . $row5["question"] . "</td></tr>";
                        echo "<tr><td><br>&nbsp&nbsp<input type=radio name=ans$a value='".$row5['answer1']."'>".$row5['answer1']."";
                        echo "<br>&nbsp&nbsp<input type=radio name=ans$a value='".$row5['answer2']."'>".$row5['answer2']."";
                        //echo "<tr><td><input type=hidden name=ans$a value='".$row5['answer1']."'>";
                        echo "<br><input type=hidden name=id$a value='".$row5["id"]."'><input type=hidden name=count value=$a>";
                        echo "</tr>";
                    }
                    echo "<tr align=center><td><br><input type=submit value=Submit name=submit1></form></td></tr></table><br>";


                    ?>
                    <!-------------------------------------------------------Content------------------------------------------------------->
                </td>

                <td width=20% bgcolor="black" rowspan=1>
                    <!-----------Right----------->
                </td>
            </tr>


        </table>
        <?php

    }

    public function retrieveForManage(){

        ?>

        <table width="100%" height="100%" border=1 cellpadding="0" cellspacing="0" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;" >

            <tr height=10%>

                <td width=20% bgcolor="black" rowspan=1>
                    <!--------------------------------------------------------left--------------------------------------------------------->

                    <!--------------------------------------------------------Left--------------------------------------------------------->
                </td>
                <td height="85%">
                    <!-------------------------------------------------------Content------------------------------------------------------->
                    <?php
                    require_once '_connection.php';
                    $sql ="SELECT * FROM quiz";

                    //return result
                    $query = mysql_query($sql)or die (mysql_error());
                    $q=0;
                    ?><a href='../OnlineQuiz/AdminIndex.php'><button>Back</button></a>
                    <a href='../OnlineQuiz/create_INDEX.php'><button>Create New Question</button></a><?php
                    echo "<table name=2 border=0 cellpadding=5 width=100%>";
                    echo "<form method=post>";

                    //view question description
                    while($row = mysql_fetch_array($query)) {
                        $q++;
                        echo "<tr><td><input type=hidden name=id$q value='".$row['id']."'</td></tr>";
                        echo "<tr>";
                        echo "<td>Question ".$q.")</td></tr><tr>";
                        echo "<td>"  . $row["question"] . "</td></tr>";
                        echo "<tr><td>".$row['answer1']."";
                        echo "<br>".$row['answer2']."";
                        echo "<br><br>True answer : ".$row['trueAns']."</td>";
                        echo "<tr><td><input type=submit name=edit$q value=Edit>";
                        echo "<input type=submit name=delete$q value=Delete></td></tr>";
                        echo "<tr><td><hr width=40% align=left></td></tr>";

                        //click edit button
                        if(isset($_POST["edit$q"])){
                            echo"<meta http-equiv=\"refresh\"content=\"0.00001;URL=edit_INDEX.php?op=".$_POST["id$q"]."\"/>";
                        }
                        //click delete button
                        if(isset($_POST["delete$q"])){
                            echo"<meta http-equiv=\"refresh\"content=\"0.00001;URL=delete_INDEX.php?op=".$_POST["id$q"]."\"/>";
                        }
                    }
                    echo "</table>";

                    ?>
                    <!-------------------------------------------------------Content------------------------------------------------------->
                </td>

                <td width=20% bgcolor="black" rowspan=1>
                    <!-----------Right----------->
                </td>
            </tr>


        </table>
        <?php


    }

}
