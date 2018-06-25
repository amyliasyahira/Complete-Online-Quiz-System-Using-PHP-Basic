<html><body>
<?php

class frmEdit{
    public function editDescription($id){
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
                    //$id=$_GET["op"];
                    require_once '_connection.php';
                    $sql ="SELECT * FROM quiz where id='".$id."'";
                    $query = mysql_query($sql)or die (mysql_error());
                    echo "<table width=90% align=center><form method=post>";
                    while($row = mysql_fetch_array($query)) {
                        echo "<tr bgcolor=#ffc0cb><td colspan=2>&nbsp&nbspEdit Question Description</td></tr>";
                        echo "<tr><td><input type=hidden name=id value='".$row['id']."'</td></tr>";
                        echo "<tr>";
                        echo "<td width=20%>&nbsp&nbspQuestion</td><td><input type=text name=question size=80% value='".$row['question']."'></td></tr>";
                        echo "<tr><td>&nbsp&nbspAnswer 1</td><td><input type=text name=answer1 size=80% value='".$row['answer1']."'></td></tr>";
                        echo "<tr><td>&nbsp&nbspAnswer 2</td><td><input type=text name=answer2 size=80% value='".$row['answer2']."'></td></tr>";
                        echo "<tr><td>&nbsp&nbspTrue Answer</td><td><select name=trueAns><option value=answer1>Answer1<option value=answer2>Answer2</td></tr>";
                        echo "<tr><td><input type=submit name=save value=Save>";
                        echo "<input type=submit name=cancel value=Cancel></td></tr>";
                        echo "<tr><td><hr width=40% align=left></td></tr></form></table>";
                    }
                    if(isset($_POST["save"])){

                        if($_POST["question"]==""){
                            ?>
                            <script languange=javascript>
                                alert("Please fill in question !");
                            </script>
                        <?php
                        }
                        elseif($_POST["answer1"]==""){
                        ?>
                            <script languange=javascript>
                                alert("Please fill in answer 1 !");
                            </script>
                        <?php
                        }
                        elseif($_POST["answer2"]==""){
                        ?>
                            <script languange=javascript>
                                alert("Please fill in answer 2 !");
                            </script>
                            <?php
                        }
                        else{

                            //return true
                            $ta = $_POST["answer1"];
                            if($_POST["trueAns"]=="answer2"){
                                $ta = $_POST["answer2"];
                            }
                            require_once 'edit_CTR.php';
                            $ctr = new ctrEdit();
                            $ctr->updateQuestion($id, $_POST['question'], $_POST['answer1'], $_POST['answer2'], $ta);
                        }


                    }
                    if(isset($_POST["cancel"])){
                        header('location:manage_INDEX.php');
                        exit();
                    }
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
?>


</body></html>
