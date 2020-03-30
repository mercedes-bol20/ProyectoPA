<?php
    require_once("credentials.php");
    // Create database connection 
    $conn = mysqli_connect($servidor, $usuario, $passwd);
    $dbconn = mysqli_select_db($conn, $db);
    // Check connection
    if (!$conn) {
        die("Server connection failed: " . mysqli_connect_error());
    }
    //echo "Server connected successfully<br>";
    if (!$dbconn){
        die("Database connection failed: " . mysqli_connect_error());
    }
    //echo "Database connected successfully";
?>