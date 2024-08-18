<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navigation.css">
</head>
<body>
    <header>
        <nav>
            <div class="topbx">
                <a href="../index.php">
                    <div class="logo">
                        <div>
                            <img src="../images/logo.png" alt="Ascepius-logo">
                        </div>
                        <div>
                            <h4>Ascepius</h4>
                            <p>Healthcare</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="topbx">
                <div class="tpsub">
                    <div class="viw">
                        <p><?php //echo $userName ?></p>
                        <div class="cker">
                            <label for="chhck" onclick="showNavigators()">
                                <input type="checkbox" name="chhck" id="chhck">
                                <img id="imchk01" src="./images/toggle_off_FILL0_wght400_GRAD0_opsz48.svg" alt="toggle-off">
                                <img id="imchk02" src="./images/toggle_on_FILL1_wght400_GRAD0_opsz48.svg" alt="toggle-on">
                            </label>
                        </div>
                        <div class="imag">
                            <img src="../images/portraits/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" alt="profile-pic">
                        </div>
                        <div id="dropper" class="drp">
                            <ul>
                                <a href="#"><li>Dashboard</li></a>
                                <a href="#"><li>Settings</li></a>
                                <a href="../logout.php"><li>Log Out</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script>
        function showNavigators(){
            var checkbox = document.getElementById("chhck");
            var navBox = document.getElementById("dropper");

            if(checkbox.checked == false){
                navBox.style.transform = 'scale(0)';
            }else{
                navBox.style.transform = 'scale(1)';
            }
        }
    </script>
</body>
</html>