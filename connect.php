<?php
    $servername = "sql110.infinityfree.com";
    $username = "if0_37131410";
    $password = "FREE100host";
    $database = "if0_37131410_ascepiushealthcare";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        header("Location: error.php");
        exit();
    }else{
        
    }

?>
