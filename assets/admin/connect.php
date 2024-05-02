<?php
    $conn = new mysqli('localhost','root','','llp');
 
    $conn->set_charset("utf8");//รองรับ utf8 ภาษาไทย
    error_reporting(~E_NOTICE);	
    if ($conn->connect_errno){
        die("Connection Failed!".$conn->connect_error);
    }

?>