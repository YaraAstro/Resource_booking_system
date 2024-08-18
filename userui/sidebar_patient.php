<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/sidebar.css">
    <style>
        #imag::before{
            background: linear-gradient(45deg, rgb(0, 242, 96) 0%, rgb(5, 117, 230) 100%);
        }
        
        .blo:nth-child(2) ul li{
            background: linear-gradient(135deg, rgb(0, 199, 17) 0%, rgb(1, 132, 184) 100%);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        }
    </style>
</head>
<body>
    <div class="sideBar">
        <div class="blo">
            <div class="blie">
                <div id="imag">
                    <img src="../images/portraits/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" alt="profile-pic">                
                </div>
            </div>
            <div class="blie">
                <div class="text">
                    <h4><?php  echo $userName ?></h4>
                    <h4><?php echo $userId ?></h4>
                </div>
            </div>
        </div>
        <div class="blo">
            <ul>
                    <a href="#"><li>Medical History</li></a>
                    <a href="#"><li>Prescriptions</li></a>
                    <a href="#"><li>Appointments</li></a>
                    <a href="#"><li>Lab Results</li></a>
                    <a href="#"><li>Insurance</li></a>
                    <a href="#"><li>Paymenta</li></a>
                    <a href="#"><li>Settings</li></a>
                </ul>
        </div>
    </div>
</body>
</html>