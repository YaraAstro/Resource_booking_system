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
    <link rel="icon" href="../images/logo.png">
    <title><?php echo $userName ?> | Ascepius Helthcare | Patient</title>
    <link rel="stylesheet" href="./styles/patient.css">
    <link rel="stylesheet" href="../styles/scrollbar.css">
</head>
<body>
    <div id="page">
        <?php  include './navigation.php' ?>

        <div class="pgdn">
            <div class="block">
                <?php  include './sidebar_patient.php' ?>
            </div>
            <div class="block">
                <div class="sblk">
                    <div class="brik">
                        <h3><?php //echo $userName ?></h3>
                        <ul>
                            <li>Blood Type :</li>
                            <li>Age :</li>
                            <li>Status :</li>
                        </ul>
                    </div>
                    <div class="brik">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, ad rem ut tempore, laudantium aperiam alias culpa non quod incidunt error! Neque ipsum iure dolores, ea perspiciatis obcaecati totam! Sint sapiente facere deleniti corrupti cumque?
                        </p>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Ask For :</h3>
                    <div class="brik">
                        <div class="bx">
                            <a href="#"><button>Doctor</button></a>
                            <a href="#"><button>Telehealth Session </button></a>
                            <a href="#"><button>Caregiver</button></a>
                            <a href="#"><button>Group Class</button></a>
                            <a href="#"><button>Prescription Refill</button></a>
                            <a href="#"><button>Laboratoy Test</button></a>
                            <a href="#"><button>Hospital Bed</button></a>
                        </div>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Upcomings:</h3>

                    <div>
                        <p>dolores minus expedita sapiente non, nobis beatae quos?</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php include './userfooter.php' ?>
    </div>
</body>
</html>

<?php 
    // include '../closeConnection.php';
?>