<html>
<head>
    <title>Vacation Planning Tools</title>
</head>

<body>
<table width="100%" height="100%" border=1 cellpadding="0" cellspacing="0" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;" >
    <tr>
        <td align=center colspan=3 height=15%  bgcolor="">
<!----------------------------------------------------------top-------------------------------------------------------->
            <table width=100% height=80% border="0" cellspacing="0" align="center">
                <tr align="center" bgcolor="red">
                    <td width="5%"></td>
                    <td align="center">
                        <a href="index.php" style=text-decoration:none><h1><font color=#f5f5f5>ONLINE QUIZ SYSTEM</font></h1></a>
                    </td>
                    <td width="5%" align="right"><a href='../OnlineQuiz/login_INDEX.php'><input type=button value=Admin></a></td>
                </tr>
            </table>
<!----------------------------------------------------------top-------------------------------------------------------->
        </td>
    </tr>
    <tr height=10%>

        <td width=20% bgcolor="black" rowspan=1>
<!--------------------------------------------------------left--------------------------------------------------------->

<!--------------------------------------------------------Left--------------------------------------------------------->
        </td>
        <td height="85%">
<!-------------------------------------------------------Content------------------------------------------------------->
            <table>
                <tr align="center">
                    <td>
                        <h1>Welcome</h1>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <img src="_main.jpg" width="70%" height="60%">
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <form method="get" target="fill">
                            <input type="submit" name="start" value="Start">
                        </form>
                    </td>
                </tr>
            </table>
<!-------------------------------------------------------Content------------------------------------------------------->
        </td>

        <td width=20% bgcolor="black" rowspan=1>
            <!-----------Right----------->
        </td>
    </tr>


</table>
<?php
if(isset($_GET["start"])){
    header('location:quiz_INDEX.php');
}
?>
</body>
</html>






























