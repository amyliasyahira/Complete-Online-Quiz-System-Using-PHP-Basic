<?php
session_start();
if(isset($_SESSION['username'])) {
    header('location:AdminIndex.php');
}
else{
    class frmLogin{

        public function insertData()
        {
            ?>
            <table width="100%" height="100%" border=1 cellpadding="0" cellspacing="0" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;" >

                <tr height=10%>

                    <td width=20% bgcolor="black" rowspan=1>
                        <!--------------------------------------------------------left--------------------------------------------------------->

                        <!--------------------------------------------------------Left--------------------------------------------------------->
                    </td>
                    <td height="85%">
                        <!-------------------------------------------------------Content------------------------------------------------------->
                        <table border=0  width=60% align=center cellspacing=0 cellpadding=0 >
                            <form method="post">

                                <tr bgcolor=#ffc0cb align=center>
                                    <td colspan=2>Login to Administration Account</td>
                                </tr>
                                <tr>
                                    <td width=20%><br>&nbsp&nbsp&nbspUsername</td>
                                    <td><br><input type="text" name="txtUsername"></td>
                                </tr>
                                <tr>
                                    <td><br>&nbsp&nbsp&nbspPassword</td>
                                    <td><br><input type="password" name="txtPassword"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><br><input type="submit" name="submit1" value="Log In">    <a href='../OnlineQuiz/index.php'><input type=button value=Cancel></a></td>
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
            if(isset($_POST["submit1"])){
                $this->validateInput();
            }
        }

        public function validateInput(){
            require_once 'login_CTR.php';
            $ctrLogin = new ctrlogin();
            if($ctrLogin->getUsername()==""){
                ?>
                <script languange=javascript>
                    alert("Please insert username !");
                </script>
                <?php
            }
            elseif($ctrLogin->getPassword()==""){
                ?>
                <script languange=javascript>
                    alert("Please insert password !");
                </script>
                <?php
            }
            else{
                require_once 'login_CTR.php';
                $ctr = new ctrLogin();
                $ctr->validate();
            }
        }

    }

}

?>


