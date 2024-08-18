<?php
    // session_start();

    // include '../connect.php';

    // if (isset($_SESSION['userID'], $_SESSION['userName']/*, $_SESSION['profile_pic']*/)) {
    //     // Retrieve the session variables
    //     $userId = $_SESSION['userID'];
    //     $userName = $_SESSION['userName'];
    //     $profilePic = $_SESSION['profilePic'];
    // }else{
    //     header("Location: ../login/index.php");
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php //echo $userName ?> | Ascepius Helthcare | Doctor</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="./styles/doctor.css">
    <link rel="stylesheet" href="../styles/scrollbar.css">
</head>
<body>
    <div id="page">
        <?php  include './navigation.php' ?>

        <div class="pgdn">
            <div class="block">
            <?php  include './sidebar_doc.php' ?>
            </div>
            <div class="block">
                <div class="sblk">
                    <h3>Channelings :</h3>
                    <div class="brik">
                    <div class="chans">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatem sed saepe?</p>
                        </div>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Telehealth Sessions :</h3>
                    <div class="brik">
                        <div class="tels">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatem sed saepe?</p>
                        </div>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Lab Results :</h3>
                    <div class="brik">
                        <div class="labres">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatem sed saepe?</p>
                        </div>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Notifications :</h3>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In doloribus nesciunt magni.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include './userfooter.php' ?>
    </div>
</body>
</html>