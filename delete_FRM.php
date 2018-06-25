<?php
class frmDelete{
    public function confirmDelete($id){
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
                    $sql ="SELECT * FROM quiz where id='".$id."'";
                    $query = mysql_query($sql)or die (mysql_error());
                    echo "<table width=90% align=center><form method=post>";
                    while($row = mysql_fetch_array($query)) {
                        echo "<tr bgcolor=#ffc0cb><td colspan=2>&nbsp&nbspConfirm delete ?</td></tr>";
                        echo "<tr><td><input type=hidden name=id value='".$row['id']."'</td></tr>";
                        echo "<tr>";
                        echo "<td>&nbsp&nbspQuestion</td><td>".$row['question']."</td></tr>";
                        echo "<tr><td>&nbsp&nbspAnswer 1</td><td>".$row['answer1']."</td></tr>";
                        echo "<tr><td>&nbsp&nbspAnswer 2</td><td>".$row['answer2']."</td></tr>";
                        echo "<tr><td>&nbsp&nbspTrue Answer</td><td>".$row['trueAns']."</td></tr>";
                        echo "<tr><td><input type=submit name=save value=Delete>";
                        echo "<input type=submit name=cancel value=Cancel></td></tr>";
                        echo "<tr><td><hr width=40% align=left></td></tr></form></table>";
                    }
                    if(isset($_POST["save"])){
                        require_once 'delete_CTR.php';
                        $ctr = new ctrDelete();
                        $ctr->deleteQuestion($id);
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