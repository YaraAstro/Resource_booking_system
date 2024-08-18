<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | Ascepius Healthcare [Third Party]</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="./styles/form.css">
    <link rel="stylesheet" href="./styles/logo.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap');
        h3{
            margin-bottom: 10px;
        }
        
        body::after{
            background: url('../images/modern-healthcare-experts-working-with-advanced-technology-generated-by-ai.jpg');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            filter: brightness(0.5);
            z-index: -3;
        }
        h4{
            font-family: 'Lobster Two', cursive;
            font-weight: normal;
            color: rgb(131, 131, 131);
            font-size: 1.25em;
            margin-bottom: 25px;
        }

        fieldset{
            outline: none;
            border: none;
        }

        #companyType{
            width: 75%;
        }

        input[type="file"]::-webkit-file-upload-button{
            visibility: hidden;
        }

        form{
            z-index: 5;
        }

        form .btx{
            margin-right: 35px;
        }

        .block:nth-child(1){
            min-width: 400px;
            padding-left: 50px;
        }

        form input, 
        form select{
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div id="page">
        <div class="block">
            <h3>Third-Party Registration</h3>
            <form action="./cmpanyreg.php" method="POST" id="signupForm">
                <fieldset>
                    <h4>Company Details</h4>

                    <div class="box">
                        <label for="companyName">Company Name:</label>
                        <input type="text" id="companyName" name="companyName" required>
                    </div>
                    <div class="box">
                        <label for="companyType">Company Type:</label>
                        <select id="companyType" name="companyType" required>
                            <option value="">Select Company Type</option>
                        </select>
                    </div>
                    <div class="box">
                        <label for="web">Website:</label>
                        <input type="text" id="web" name="web">
                    </div>
                    <div class="box">
                        <label for="hotline">Hotline:</label>
                        <input type="text" id="hotline" name="hotline" required>
                    </div>

                    <div class="btx">
                        <button type="button" onclick="nextStep(1, 2)">Next</button>
                    </div>  
                </fieldset>

                <fieldset>
                    <h4>Contact Details</h4>

                    <div class="box">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                    </div>
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
  
                    <div class="btx">
                        <button type="button" onclick="prevStep(2, 1)">Previous</button>
                        <button type="button" onclick="nextStep(2, 3)">Next</button>
                    </div> 
                </fieldset>

                <fieldset>
                    <h4>Additional Details</h4>

                    <div class="box">
                        <label for="postalCode">Postal Code:</label>
                        <input type="text" id="postalCode" name="postalCode" required pattern="[0-9]{5}">
                    </div>
                    <div class="box">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description"></textarea>
                    </div>
                    <div class="box">
                        <label for="logo">Logo:</label>
                    <input type="file" id="logo" name="logo">
                    </div>
                    
                    <div class="btx">
                        <button type="button" onclick="prevStep(3, 2)">Previous</button>
                        <button type="submit">Register</button>
                    </div> 
                </fieldset>
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
        const companyTypes = ["Insurance Companies",  "Pharmaceutical Companies",  "Medical Device Manufacturers",  "Laboratories and Testing Facilities",  "Medical Billing and Coding Services",  "Healthcare Consultants",  "Pharmacy Benefit Managers",  "Health Information Exchanges",  "Telehealth and Telemedicine Providers",  "Electronic Health Record (EHR) Vendors",  "Medical Supply Companies",  "Medical Waste Management Companies",  "Healthcare Technology Providers",  "Medical Research Organizations",  "Medical Transcription Services",  "Clinical Trial Organizations",  "Medical Credentialing Services",  "Healthcare Regulatory Bodies",  "Accreditation Organizations",  "Health Information Management Companies",  "Medical Imaging and Diagnostic Services",  "Home Healthcare Services",  "Rehabilitation and Therapy Providers",  "Medical Tourism Companies",  "Blood and Organ Banks",  "Medical Education and Training Institutions",  "Non-Governmental Organizations (NGOs) in Healthcare",  "Health and Wellness Coaches",  "Medical Interpreters and Translators",  "Patient Advocacy Groups",  "Health Screening and Prevention Services",  "Medical Tourism Facilitators",  "Fitness Centers and Gyms",  "Hospice and Palliative Care Providers",  "Mental Health and Counseling Services",  "Occupational Health and Safety Services",  "Employee Assistance Program Providers",  "Health and Wellness Program Providers",  "Healthcare Marketing and Advertising Agencies", "Medical Legal Services"];

        const companyTypeDropdown = document.getElementById('companyType');
        companyTypes.forEach(function (type) {
            const option = document.createElement('option');
            option.value = type;
            option.textContent = type;
            companyTypeDropdown.appendChild(option);
        });

        const form = document.getElementById('signupForm');
        const fieldsets = form.querySelectorAll('fieldset');
        let currentStep = 1;

        function nextStep(current, next) {
            if (next <= fieldsets.length) {
                fieldsets[current - 1].style.display = 'none';
                fieldsets[next - 1].style.display = 'block';
                currentStep = next;
            }
        }

        function prevStep(current, prev) {
            if (prev >= 1) {
                fieldsets[current - 1].style.display = 'none';
                fieldsets[prev - 1].style.display = 'block';
                currentStep = prev;
            }
        }

        // Hide all fieldsets except the first one initially
        for (let i = 1; i < fieldsets.length; i++) {
            fieldsets[i].style.display = 'none';
        }
    </script>
</body>
</html>
