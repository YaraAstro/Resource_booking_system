<?php 
    session_start();

    include './connect.php';

    if (isset($_SESSION['userID'], $_SESSION['userName']/*, $_SESSION['profile_pic']*/)) {
        
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        header("Location: ./index.php");

    }else{
        header("Location: ./login/index.php");
        exit();
    }

    include './closeConnection.php';
    
?>