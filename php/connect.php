<?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'llp');
    $conn->set_charset("utf8");

    if($conn->connect_errno){
        die("Connect Failed !!" . $conn->connect_error);
    }
?>