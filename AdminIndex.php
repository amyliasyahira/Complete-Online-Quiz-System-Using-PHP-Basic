
<html><body>
<table width="100%" height="100%" border=1 cellpadding="0" cellspacing="0" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;" >



    <tr height=10%>

        <td width=20% bgcolor="black" rowspan=1>
            <!--------------------------------------------------------left--------------------------------------------------------->

            <!--------------------------------------------------------Left--------------------------------------------------------->
        </td>
        <td height="85%">
            <!-------------------------------------------------------Content------------------------------------------------------->
            <?php
        session_start();
        if(isset($_SESSION['username'])) {
            echo "Hello ".$_SESSION['username']."";
            echo '<form method="get">';
            echo '<input type="submit" value="Log Out" name="logout">';
            echo '<input type="submit" value="Manage Quiz" name="view">';
            echo '</form>';

        }
        else{
            header ('location:index.php');
        }
        if(isset($_GET["logout"])){
            session_start();
            session_destroy();
            header ('location:index.php');
        }
        if(isset($_GET["view"])){
            header ('location:manage_INDEX.php');
        }


        ?>
        <!-------------------------------------------------------Content------------------------------------------------------->
        </td>

        <td width=20% bgcolor="black" rowspan=1>
            <!-----------Right------------------------------------------------------------------------------------------------->
        </td>
    </tr>


</table>

<?php
?>
</body></html>

