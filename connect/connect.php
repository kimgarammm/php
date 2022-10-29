<?php
    $host = "localhost";
    $user = "garam1";
    $pw = "gaga4476201!";
    $dbName = "garam1";
    $connect = new mysqli($host, $user, $pw, $dbName);
    $connect -> set_charset("utf8");
    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        // echo "database connect true";
    }
?>