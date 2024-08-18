<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/navBarSatyles.css">
    <script src="./javascripts/navBar.js"></script>
</head>
<body>


    <header>
        <nav>
            <a href="./index.php">
                <div class="logo">
                        <div>
                            <img src="./images/logo.png" alt="Ascepius-logo">
                        </div>
                        <div>
                            <h4>Ascepius</h4>
                            <p>Healthcare</p>
                        </div>
                </div>
            </a>
            <label class="hamburger-container" onclick="showNavigators()">
                <input type="checkbox" id="checker">
                <div class="hamburger-bar"></div>
            </label>
            <div class="list" id="navbox">
                
                <ul>
                    <a href="./Channeling/index.html"><li>Channelling</li></a>
                    <a href="./services.html"><li>Services</li></a>
                    <a href="./labs.php"><li>Laboratories</li></a>
                    <a href="./about.php"><li>About</li></a>
                    <a href="./contactus.php"><li>Contact Us</li></a>
                </ul>
                <ul>
                    <a href="./login/index.php"><li>Sign-In</li></a>
                    <a href="./registration/index.html"><li>Sign-Up</li></a>
                </ul>
            </div>
            
        </nav>
    </header>
    
</body>
</html>