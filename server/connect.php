<?php
    //ประกาศการใช้งาน session 
    session_start();
    // Create connection แบบ PDO    
    $servername = "localhost";
    $username = "root";
    $password = "";    
    $databasename = "elearning";
    date_default_timezone_set("Asia/Bangkok");

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("set names utf8"); 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }