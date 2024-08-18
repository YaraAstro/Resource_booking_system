<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | Ascepius Healthcare [Patient]</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="./styles/form.css">
    <link rel="stylesheet" href="./styles/logo.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div id="page">
        <div class="block">
            <h3>Sgn-Up Patient</h3>
            <form action="./registerPatient.php" method="POST">
                
                <section id="step1">
                    <div class="box">
                        <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>
                    </div>
                    <div class="box">
                        <label for="initials">Name Initials:</label>
                        <input type="text" id="initials" name="initials" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="nextStep(2)">Next</button>
                    </div>
                </section>

                <section id="step2" class="hidden">
                    <div class="box">
                        <label for="nic">NIC:</label>
                        <input type="text" id="nic" name="nic">
                    </div>
                    <div class="box">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="prevStep(1)">Previous</button>
                        <button type="button" onclick="nextStep(3)">Next</button>
                    </div>
                </section>

                <section id="step3" class="hidden">
                    <div class="box">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="box">
                        <label for="bloodtype">Blood Type:</label>
                        <input type="text" id="bloodtype" name="bloodtype" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="prevStep(2)">Previous</button>
                        <button type="button" onclick="nextStep(4)">Next</button>
                    </div>
                </section>

                <section id="step4" class="hidden">
                    <div class="box">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="box">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="prevStep(3)">Previous</button>
                        <button type="button" onclick="nextStep(5)">Next</button>
                    </div>
                </section>

                <section id="step5" class="hidden">
                    <div class="box">
                        <label for="district">District:</label>
                        <select id="district" name="district">
                            <option value="">Select District</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select>
                    </div>
                    <div class="box">
                        <label for="postal">Postal Code:</label>
                        <input type="text" id="postal" name="postal" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="prevStep(4)">Previous</button>
                        <button type="button" onclick="nextStep(6)">Next</button>
                    </div>
                </section>

                <section id="step6" class="hidden">
                    <div class="box">
                        <label for="mobile">Mobile:</label>
                        <input type="text" id="mobile" name="mobile" required>
                    </div>
                    <div class="box">
                        <label for="tele">Telephone:</label>
                        <input type="text" id="tele" name="tele" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="prevStep(5)">Previous</button>
                        <button type="button" onclick="nextStep(7)">Next</button>
                    </div>
                </section>

                <section id="step7" class="hidden">
                    <div class="box">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="box">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" minlength="8" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="prevStep(6)">Previous</button>
                        <button type="submit">Submit</button>
                    </div>
                </section>

                <div id="guardianSection" class="hidden">
                    <div class="box">
                        <label for="guardianName">Guardian Name:</label>
                        <input type="text" id="guardianName" name="guardianName">
                    </div>
                    <div class="box">
                        <label for="guardianMobile">Guardian Mobile:</label>
                        <input type="text" id="guardianMobile" name="guardianMobile">
                    </div>
                    <div class="box">
                        <label for="guardianNIC">Guardian NIC:</label>
                        <input type="text" id="guardianNIC" name="guardianNIC">
                    </div>

                    <div class="btx">
                        <button type="button" onclick="prevStep(7)">Previous</button>
                        <button type="button" onclick="nextStep(8)">Next</button>
                    </div>
                </div>

                <!-- JavaScript to handle the steps -->
                <script>
                    var currentStep = 1;
                    var totalSteps = 7;

                    function nextStep(step) {
                        document.getElementById("step" + currentStep).classList.add("hidden");
                        document.getElementById("step" + step).classList.remove("hidden");
                        currentStep = step;
                    }

                    function prevStep(step) {
                        document.getElementById("step" + currentStep).classList.add("hidden");
                        document.getElementById("step" + step).classList.remove("hidden");
                        currentStep = step;
                    }
                </script>
            </form>
        </div>
        <div class="block">
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
    </div>
    <a href="../login/index.php" id="log">Already Have an Account ?</a>

</body>
</html>
