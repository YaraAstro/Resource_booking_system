<?php
    $servername = "localhost";
    $username = "healthcare";
    $password = "Ascepius200";
    $database = "ascepiushealthcare";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        header("Location: error.php");
        exit();
    }else{
        
    }

?>
