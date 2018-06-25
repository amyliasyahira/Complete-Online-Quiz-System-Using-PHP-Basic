<?php

class dbLogin{
    public function retrievePassnID($id, $pass)
    {
        require '_connection.php';
        $sql ="SELECT * FROM admin WHERE username='".$id."' AND password='".$pass."'";
        $query = mysql_query($sql)or die (mysql_error());
        $row = mysql_num_rows($query) ;
        return $row;
    }
}