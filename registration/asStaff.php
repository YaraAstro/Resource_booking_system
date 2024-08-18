<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | Ascepius Healthcare [Staff]</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="./styles/form.css">
    <link rel="stylesheet" href="./styles/logo.css">
    <link rel="stylesheet" href="./styles/staff.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap');
        #page{
            justify-content: space-evenly;
        }
        
        body::after{
            background: url('../images/young-female-doctor-posing-corridor-hospital.jpg');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            filter: brightness(0.5);
            transform: rotateY(180deg);
            z-index: -3;
        }

        .step {
            display: none;
        }

        h4{
            font-family: 'Lobster Two', cursive;
            font-weight: normal;
            color: rgb(131, 131, 131);
            font-size: 1.25em;
            margin-bottom: 25px;
        }

        .block:nth-child(1){
            min-width: 375px;
            padding-left: 50px;
        }

        h3{
            margin-bottom: 10px;
        }

        form input, 
        form select{
            margin-top: 10px;
        }

        .sumbx p{
            font-family: 'Raleway', sans-serif;
            margin: 10px 0;
            color: rgb(75, 75, 75);
        }

        .sumbx span{
            margin-left: 25px;
            font-size: 1.15em;
            color: black;
        }

        form .btx{
            margin-right: 35px;
        }
    </style>
    <script src="./javascripts/staffreg.js"></script>
</head>
<body>
    <div id="page">
        <div class="block">
            <h3>Staff Registration</h3>
    
            <form id="registrationForm" action="./registerStaff.php" method="POST">
                <div class="step">
                    <h4>Personal Information</h4>
    
                    <div class="box">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="box">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                    <div class="box">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="box">
                        <label for="mobile">Mobile:</label>
                        <input type="text" id="mobile" name="mobile" required>
                    </div>
    
                    <div class="btx">
                        <button type="button" onclick="nextStep(2)">Next</button>
                    </div>
                </div>
    
                <div class="step">
                    <h4>Professional Information</h4>
    
                    <div class="box">
                        <label for="profession">Profession:</label>
                        <select id="profession" name="profession" onchange="updateSpecializationDropdown()" required>
                            <option value="">Select Profession</option>
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>
                            <option value="attendant">Attendant</option>
                            <option value="lab technician">Lab Technician</option>
                            <option value="instructor">Instructor</option>
                            <option value="management">Management</option>
                        </select>
                    </div>
                    <div class="box">
                        <label for="specialization">Specialization:</label>
                        <select id="specialization" name="specialization">
                            <option value="">Select Specialization</option>
                        </select>
                    </div>
    
                    <div class="btx">
                        <button type="button" onclick="prevStep(1)">Previous</button>
                        <button type="button" onclick="nextStep(3)">Next</button>
                    </div>
                </div>
    
                <div class="step">
                    <h4>Additional Information</h4>
    
                    <div class="box">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="box">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" required>
                    </div>
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
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div> 
    
                    <div class="btx">
                        <button type="button" onclick="prevStep(2)">Previous</button>
                        <button type="button" onclick="nextStep(4)">Next</button>
                    </div>
                </div>

                <div class="step">
                    <h4>Additional Information</h4>

                    <div class="box">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob">
                    </div>
                    <div class="box">
                        <label for="nic">NIC:</label>
                        <input type="text" id="nic" name="nic" required>
                    </div>
                    <div class="box">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="btx">
                        <button type="button" onclick="prevStep(3)">Previous</button>
                        <button type="button" onclick="nextStep(5)">Next</button>
                    </div>
                </div>
    
                <div class="step">
                    <h4>Confirmation</h4>
                    
                    <div class="sumbx">
                        <p>First Name: <span id="summaryFirstName"></span></p>
                        <p>Last Name: <span id="summaryLastName"></span></p>
                        <p>Email: <span id="summaryEmail"></span></p>
                        <p>Mobile: <span id="summaryMobile"></span></p>
                        <p>Profession: <span id="summaryProfession"></span></p>
                        <p>Specialization: <span id="summarySpecialization"></span></p>
                        <p>Address: <span id="summaryAddress"></span></p>
                        <p>City: <span id="summaryCity"></span></p>
                        <p>Gender: <span id="summaryGender"></span></p>
                        <p>Date of Birth: <span id="summaryDob"></span></p>
                        <p>NIC: <span id="summaryNic"></span></p>
                        <p>District: <span id="summaryDistrict"></span></p>
                    </div>
                    
                    <div class="btx">
                        <button type="button" onclick="prevStep(4)">Previous</button>
                        <button type="submit">Register</button>
                    </div>
                </div>
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
    
    <script>
        let currentStep = 1;
        const form = document.getElementById('registrationForm');
        const steps = Array.from(document.getElementsByClassName('step'));

        function showStep(stepNumber) {
            steps.forEach(function (step) {
                step.style.display = 'none';
            });

            steps[stepNumber - 1].style.display = 'block';
        }
        showStep(currentStep);
    </script>
</body>
</html>