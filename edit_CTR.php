<?php
class ctrEdit{
    public function updateQuestion($id,$q,$a1,$a2,$t){
        $sql3 ="update quiz set question='".$q."' , answer1='".$a1."' , answer2='".$a2."' , trueAns='".$t."'  where id='".$id."'";
        $query3 = mysql_query($sql3)or die (mysql_error());
        echo "<meta http-equiv=\"refresh\"content=\"0.00001;URL=manage_INDEX.php\"/>";

        //return result
        if($query3){
            ?>
            <script languange=javascript>
                alert("Data Updated !");
            </script>
            <?php
        }
        else{
            ?>
            <script languange=javascript>
                alert("Update Fail !");
            </script>
            <?php
        }
    }
}