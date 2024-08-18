<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In | Ascepius Healthcare</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="./javascripts/scripts.js"></script>
</head>
<body>
    <?php include '../loading.php' ?> 

    <div id="page" class="frame">
        <div class="content">
            <div class="h-logo">
                <a href="../index.php">
                    <img src="..\images\logo.png" alt="">
                </a>
                <a href="../index.php">
                    <h4>Ascepius</h4>
                    <p>Healthcare</p>
                </a>
            </div>
        </div>
        <div class="content">
            <form action="loginProcess.php" method="post">
                <h3>Login</h3>
                <div class="appl">
                    <div class="box">
                        <!-- <label for="userid">User Id</label> -->
                        <input type="text" name="userid" id="userid" placeholder="User ID / E-mail">
                    </div>
                    <div class="box">
                        <!-- <label for="paswd">Password</label> -->
                        <input type="password" name="paswd" id="paswd" placeholder="Password">
                        <label id="visbtn" for="chk">
                            <input type="checkbox" name="chk" id="chk" onclick="toggle();">
                            <img id="img01" src="./images/visibility_FILL1_wght400_GRAD0_opsz48.svg" alt="visibility-on">
                            <img id="img02" src="./images/visibility_off_FILL1_wght400_GRAD0_opsz48.svg" alt="visibility-off">                            
                        </label>
                    </div>
                    <a href="./recoverpw.html" class="fpw">Forget Password ?</a>
                    <button type="submit">Login</button>
                </div>
            </form>
            <a href="../registration/index.html" class="reg">Don't Have an Account ?</a>
        </div>
    </div>

    <script>
        /* Show page after loading process done */

        const page = document.getElementById('page');

        window.addEventListener('load', () => {

            setTimeout(function(){
                page.style.display='flex';
            }, 3000);
        });
    </script>
</body>
</html>

