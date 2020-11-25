<?php
    // Database credentials
    $servername = "den1.mysql4.gear.host";
    $username   = "tc1004bmichelle";
    $password   = "Zc5B!p46Kx-f";
    $dbname     = "tc1004bmichelle";
    $tbname     = "sensor";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>