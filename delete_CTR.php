<?php
class ctrDelete{
    public function deleteQuestion($id){
        $sql2 = "delete from quiz where id='".$id."'";
        $query2 = mysql_query($sql2)or die (mysql_error());
        echo "<meta http-equiv=\"refresh\"content=\"0.00001;URL=manage_INDEX.php\"/>";

        //return result
        if($query2){
            ?>
            <script languange=javascript>
                alert("Data Deleted !");
            </script>
            <?php
        }
        else{
            ?>
            <script languange=javascript>
                alert("Delete Fail !");
            </script>
            <?php
        }

    }
}