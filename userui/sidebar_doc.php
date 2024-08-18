<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/sidebar.css">
    <style>
        #imag::before{
            background: linear-gradient(135deg, rgb(86, 204, 242) 0%, rgb(47, 128, 237) 100%);
        }
        
        .blo:nth-child(2) ul li{
            background: linear-gradient(0deg, rgb(86, 204, 242) 0%, rgb(47, 128, 237) 100%);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        }
        
        .blo:nth-child(2) ul{
            font-size: 1.125em;
            margin-right: 50px;
        }
        .blie .text .line h4{
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 2em;
            margin-left: 0;
        }

        .blie .text h4{
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 1.25em;
            margin-left: 25px;
        }

        .blie .text h4:nth-child(3){
            font-size: 1em;
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
                    <h4><?php echo $userName ?></h4>
                    <h4><?php echo $userId ?></h4>
                    <h4>Unite</h4>
                </div>
            </div>
        </div>
        <div class="blo">
            <ul>
                <a href="#"><li>Request Lab Test</li></a>
                <a href="#"><li>Order Prescription</li></a>
                <a href="#"><li>Manage Appointments</li></a>
            </ul>
            <ul>
                <a href="#"><li>History</li></a>
                <a href="#"><li>Manage Patients</li></a>
                <a href="#"><li>Manage Prescription</li></a>
                <a href="#"><li>Manage Resources</li></a>
                <a href="#"><li>Settings</li></a>
            </ul>
        </div>
    </div>
</body>
</html>