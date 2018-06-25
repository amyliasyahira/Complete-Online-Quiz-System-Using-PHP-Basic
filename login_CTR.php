<?php
class ctrLogin
{
    public function getUsername()
    {
        $u=$_POST["txtUsername"];
        return $u;
    }

    public function getPassword()
    {
        $p=$_POST["txtPassword"];
        return $p;
    }
    public function validate(){
        require 'login_DB.php';
        $db = new dbLogin();
        if($db->retrievePassnID($this->getUsername(),$this->getPassword())>0){
            ?>
            <script languange=javascript>
                alert("Login Success !");
            </script>
            <?php
            //session_start();
            $_SESSION['username'] = $this->getUsername();
            echo "<meta http-equiv=\"refresh\"content=\"0.00001;URL=AdminIndex.php\"/>";
        }
        else{
            ?>
            <script languange=javascript>
                alert("Username and Password not match !");
            </script>
            <?php
        }

    }
}



