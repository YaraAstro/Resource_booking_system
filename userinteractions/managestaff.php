<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Manage Staff | Ascepius Healthcare
    </title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styles/scrollbar.css">
    <link rel="stylesheet" href="./styles/mngstaff.css">
    <script src="./javascripts/managestaff.js"></script>
</head>
<body>
    <div id="page">
        <?php include '../userui/navigation.php' ?>

        <div class="pgdn">
            <div class="block">
                <?php include '../userui/sidebar_admin.php' ?>
            </div>
            <div class="block">
                <div class="sblk">
                    <h3>New Staff :</h3>

                    <div class="dropmenu">
                        <label for="category">Select Staff Type :</label>
                        <select name="category" id="category">
                            <option value="">Select Profession</option>
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>
                            <option value="attendant">Attendant</option>
                            <option value="lab technician">Lab Technician</option>
                            <option value="instructor">Instructor</option>
                            <option value="management">Management</option>
                        </select>
                    </div>

                    <div class="def">
                        <h4>Proffesion Name</h4>
                        <table>
                            <tr onclick="openBlock('persdat')">
                                <td>Staff ID</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Proffesion</td>
                                <td>Specialization</td>
                            </tr>
                            <tr onclick="openBlock('persdat')">
                                <td>Staff ID</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Proffesion</td>
                                <td>Specialization</td>
                            </tr>
                            <tr onclick="openBlock('persdat')">
                                <td>Staff ID</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Proffesion</td>
                                <td>Specialization</td>
                            </tr>
                        </table>

                    </div>
                    <div class="res01" id="persdat">
                        <button class="close" onclick="closeBlock('persdat')">&#9587;</button>
                        <div class="res-sub">
                            <h4>Personal Details :</h4>
                            <table>
                                <tr>
                                    <td>Staff ID</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Name</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Gender</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>NIC Number</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Address</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Postal Code</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Proffesion Type</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Specialization</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                            </table>
                        </div>
                        <div class="res-sub">
                            <h4>Documents :</h4>
                            <table>
                                <tr>
                                    <td>Profile Picture</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Curriculum Vitae</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Academic Certificates</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>NIC Scan</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                            </table>
                        </div>
                        <div class="res-sub">
                            <h4>Availability :</h4>
                            <table>
                                <tr>
                                    <td>Can you work on Weekdays</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Can you work on Weekdays Evening</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Can you work on Weekends</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>Can you work on Holidays</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                </tr>
                            </table>
                        </div>
                        <div class="pers-btns">
                            <button id="apppr">Approve</button>
                            <button id="pendd">Pending</button>
                            <button id="rejjt">Reject</button>
                        </div>
                    </div>
                    <div class="addbtns">
                        <button onclick="openBlock('mkschl')">Schedule Staff</button>
                        <button onclick="openBlock('strqs')">Member Requests</button>
                        <button onclick="openBlock('resrq')">Resources Requests</button>
                        <button onclick="openBlock('viwemp')">View Employee</button>
                    </div>
                </div>
                <div class="sblk" id="mkschl">
                    <h3>Assemble Staff :</h3>
                    <button class="close" onclick="closeBlock('mkschl')">&#9587;</button>

                    <div class="dropmenu">
                        <label for="category">Select Staff Type :</label>
                        <select name="category" id="category">
                            <option value="">Select Profession</option>
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>
                            <option value="attendant">Attendant</option>
                            <option value="lab technician">Lab Technician</option>
                            <option value="instructor">Instructor</option>
                            <option value="management">Management</option>
                        </select>
                    </div>

                    <div class="res02">
                        <table>
                            <thead>
                                <th></th>
                                <th>Name</th>
                                <th>Specialization</th>
                                <th>Assign to Ward</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Kamal Kamal</td>
                                    <td>Nurologist</td>
                                    <td>
                                        <select name="wardlist" id="wardlist" class="ward-list">
                                            <option>Choose the Ward</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Kamal Kamal</td>
                                    <td>Nurologist</td>
                                    <td>
                                        <select name="wardlist" id="wardlist" class="ward-list">
                                            <option>Choose the Ward</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Kamal Kamal</td>
                                    <td>Nurologist</td>
                                    <td>
                                        <select name="wardlist" id="wardlist" class="ward-list">
                                            <option>Choose the Ward</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit">Update</button>
                    </div>
                </div>
                <div class="sblk" id="strqs">
                    <h3>Staff Requests :</h3>
                    <button class="close" onclick="closeBlock('strqs')">&#9587;</button>

                    <div class="dropmenu">
                        <label for="category">Select Staff Type :</label>
                        <select name="category" id="category">
                            <option value="">Select Profession</option>
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>
                            <option value="attendant">Attendant</option>
                            <option value="lab technician">Lab Technician</option>
                            <option value="instructor">Instructor</option>
                            <option value="management">Management</option>
                        </select>
                    </div>

                    <div class="res03">
                        <table>
                            <thead>
                                <th></th>
                                <th>Name</th>
                                <th>Specialization</th>
                                <th>Requested Date</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Required Date</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Kamal Kamal</td>
                                    <td>Nurologist</td>
                                    <td>21-05-2023</td>
                                    <td>Day Off</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem!</td>
                                    <td>04-06-2023</td>
                                    <td>
                                        <div class="lee">
                                            <button class="appr">&#10004;</button>
                                            <button class="rejct">&#10008;</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Kamal Kamal</td>
                                    <td>Nurologist</td>
                                    <td>21-05-2023</td>
                                    <td>Day Off</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem!</td>
                                    <td>04-06-2023</td>
                                    <td>
                                        <div class="lee">
                                            <button class="appr">&#10004;</button>
                                            <button class="rejct">&#10008;</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Kamal Kamal</td>
                                    <td>Nurologist</td>
                                    <td>21-05-2023</td>
                                    <td>Day Off</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem!</td>
                                    <td>04-06-2023</td>
                                    <td>
                                        <div class="lee">
                                            <button class="appr">&#10004;</button>
                                            <button class="rejct">&#10008;</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit">Update</button>
                    </div>
                </div>
                <div class="sblk" id="resrq">
                    <h3>Resources Requests :</h3>
                    <button class="close" onclick="closeBlock('resrq')">&#9587;</button>

                    <div class="dropmenu">
                        <label for="category">Select Staff Type :</label>
                        <select name="category" id="category">
                            <option value="">Select Profession</option>
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>
                            <option value="attendant">Attendant</option>
                            <option value="lab technician">Lab Technician</option>
                            <option value="instructor">Instructor</option>
                            <option value="management">Management</option>
                        </select>
                    </div>

                    <div class="res04">
                        <table>
                            <thead>
                                <th></th>
                                <th>Name</th>
                                <th>Specialization</th>
                                <th>Ward</th>
                                <th>Requested Date</th>
                                <th>Type</th>
                                <th>Resource</th>
                                <th>Required Date</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Kamal Kamal</td>
                                    <td>Neurologist</td>
                                    <td>Bla BLa</td>
                                    <td>21-05-2023</td>
                                    <td>Lab Equipment</td>
                                    <td>EMP Charger</td>
                                    <td>04-06-2023</td>
                                    <td>
                                        <div class="lee">
                                            <button class="appr">&#10004;</button>
                                            <button class="rejct">&#10008;</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Kamal Kamal</td>
                                    <td>Neurologist</td>
                                    <td>Bla BLa</td>
                                    <td>21-05-2023</td>
                                    <td>Lab Equipment</td>
                                    <td>EMP Charger</td>
                                    <td>04-06-2023</td>
                                    <td>
                                        <div class="lee">
                                            <button class="appr">&#10004;</button>
                                            <button class="rejct">&#10008;</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Kamal Kamal</td>
                                    <td>Neurologist</td>
                                    <td>Bla BLa</td>
                                    <td>21-05-2023</td>
                                    <td>Lab Equipment</td>
                                    <td>EMP Charger</td>
                                    <td>04-06-2023</td>
                                    <td>
                                        <div class="lee">
                                            <button class="appr">&#10004;</button>
                                            <button class="rejct">&#10008;</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit">Update</button>
                    </div>
                </div>
                <div class="sblk" id="viwemp">
                    <h3>View Employee :</h3>
                    <button class="close" onclick="closeBlock('viwemp')">&#9587;</button>

                    <div class="searchbx">
                        <input type="search" name="schbar" id="schbar" placeholder="Search by Name or User ID . . .">
                        <button type="submit">
                            <img src="./images/search_FILL0_wght400_GRAD0_opsz48.svg" alt="search-icon">
                        </button>
                    </div>

                    <div class="viw-btn">
                        <button onclick="openBlock('prodet')">Profile Details</button>
                        <button onclick="openBlock('appo')">Appointments</button>
                        <button onclick="openBlock('wkschl')">Work Schedules</button>
                        <button onclick="openBlock('ntfst')">Notify Staff</button>
                    </div>

                    <div class="res05">
                        <div class="resub" id="prodet">
                            <h5>Profile Details :</h5>
                            <button class="close" onclick="closeBlock('prodet')">&#9587;</button>
                            <div class="res-sub">
                                <h4>Personal Details :</h4>
                                <table>
                                    <tr>
                                        <td>Staff ID</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>NIC Number</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Postal Code</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Proffesion Type</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Specialization</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="res-sub">
                                <h4>Documents :</h4>
                                <table>
                                    <tr>
                                        <td>Profile Picture</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Curriculum Vitae</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Academic Certificates</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>NIC Scan</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="res-sub">
                                <h4>Availability :</h4>
                                <table>
                                    <tr>
                                        <td>Can you work on Weekdays</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Can you work on Weekdays Evening</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Can you work on Weekends</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Can you work on Holidays</td><td>:</td><td>Lorem, ipsum dolor.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="resub" id="appo">
                            <h5>Appointments :</h5>
                            <button class="close" onclick="closeBlock('appo')">&#9587;</button>
                            
                            <div class="subsub">
                                <table>
                                    <thead>
                                        <th></th>
                                        <th>Employee Name</th>
                                        <th>Patient Name</th>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Kamal Kamal</td>
                                            <td>Nimal Nimal</td>
                                            <td>21-05-2023</td>
                                            <td>Telehealth</td>
                                            <td>1000.00</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Kamal Kamal</td>
                                            <td>Nimal Nimal</td>
                                            <td>21-05-2023</td>
                                            <td>Telehealth</td>
                                            <td>1000.00</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Kamal Kamal</td>
                                            <td>Nimal Nimal</td>
                                            <td>21-05-2023</td>
                                            <td>Telehealth</td>
                                            <td>1000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="resub" id="wkschl">
                            <h5>Schedules :</h5>
                            <button class="close" onclick="closeBlock('wkschl')">&#9587;</button>

                            <div class="subsub">
                                <table>
                                    <thead>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Proffesion</th>
                                        <th>Date</th>
                                        <th>Begin Time</th>
                                        <th>End Time</th>
                                        <th>Ward</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Name</td>
                                            <td>Profession</td>
                                            <td>
                                                <input type="date" name="shfdt" id="shfdt">
                                            </td>
                                            <td>
                                                <input type="time" name="strtim" id="strtim">
                                            </td>
                                            <td>
                                                <input type="time" name="stptim" id="stptim">
                                            </td>
                                            <td>Ward/Unite</td>
                                            <td>
                                                <button onclick="">&#10008;</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Name</td>
                                            <td>Profession</td>
                                            <td>
                                                <input type="date" name="shfdt" id="shfdt">
                                            </td>
                                            <td>
                                                <input type="time" name="strtim" id="strtim">
                                            </td>
                                            <td>
                                                <input type="time" name="stptim" id="stptim">
                                            </td>
                                            <td>Ward/Unite</td>
                                            <td>
                                                <button onclick="">&#10008;</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Name</td>
                                            <td>Profession</td>
                                            <td>
                                                <input type="date" name="shfdt" id="shfdt">
                                            </td>
                                            <td>
                                                <input type="time" name="strtim" id="strtim">
                                            </td>
                                            <td>
                                                <input type="time" name="stptim" id="stptim">
                                            </td>
                                            <td>Ward/Unite</td>
                                            <td>
                                                <button onclick="">&#10008;</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="tb-btns">
                                    <button onclick="">&#9533;</button>
                                    <button type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                        <div class="resub" id="ntfst">
                            <h5>Make Notification :</h5>
                            <button class="close" onclick="closeBlock('ntfst')">&#9587;</button>

                            <div class="subsub">
                                <div class="bli">
                                    <label for="nftpc">Title :</label>
                                    <input type="text" name="nftpc" id="nftpc" placeholder="Write Topic . . .">
                                </div>
                                <div class="bli">
                                    <label for="ntfdesc">Description :</label>
                                    <textarea name="ntfdesc" id="ntfdesc" placeholder="Put the whole information . . ."></textarea>
                                </div>
                                <div class="bli">
                                    <label for="">Choose Notification Type :</label>
                                    <select name="" id="">
                                        <option value="">Choose Type</option>
                                        <option value="Urgent">Urgent</option>
                                        <option value="Warning">Warning</option>
                                        <option value="Official">Official</option>
                                        <option value="Non-Official">Non-Official</option>
                                    </select>
                                </div>
                                <div class="bli">
                                    <button type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include '../footer.php' ?>
    </div>

    <script>
        const dropdownOptions = [
            { label: 'General Ward', value: 'generalWard' },
            { label: 'Intensive Care Unit (ICU)', value: 'icu' },
            { label: 'Pediatric Ward', value: 'pediatricWard' },
            { label: 'Maternity Ward', value: 'maternityWard' },
            { label: 'Surgical Ward', value: 'surgicalWard' },
            { label: 'Orthopedic Ward', value: 'orthopedicWard' },
            { label: 'Cardiology Ward', value: 'cardiologyWard' },
            { label: 'Oncology Ward', value: 'oncologyWard' },
            { label: 'Neurology Ward', value: 'neurologyWard' },
            { label: 'Psychiatric Ward', value: 'psychiatricWard' },
            { label: 'Burn Unit', value: 'burnUnit' },
            { label: 'Emergency Room (ER)', value: 'er' },
            { label: 'Neonatal Intensive Care Unit (NICU)', value: 'nicu' },
            { label: 'Interventional Radiology Unit', value: 'radiologyUnit' },
            { label: 'Post-Anesthesia Care Unit (PACU)', value: 'pacu' },
            { label: 'Rehabilitation Ward', value: 'rehabilitationWard' },
            { label: 'Geriatric Ward', value: 'geriatricWard' },
            { label: 'Laboratory Ward', value: 'laboratoryWard' },
            { label: 'Isolation Ward', value: 'isolationWard' },
            { label: 'Hematology Ward', value: 'hematologyWard' },
            { label: 'Gastroenterology Ward', value: 'gastroenterologyWard' },
            { label: 'Nephrology Ward', value: 'nephrologyWard' },
            { label: 'Pulmonary Ward', value: 'pulmonaryWard' },
            { label: 'Infectious Diseases Ward', value: 'infectiousDiseasesWard' },
            { label: 'Endocrinology Ward', value: 'endocrinologyWard' },
            { label: 'ENT (Ear, Nose, and Throat) Ward', value: 'entWard' },
            { label: 'Ophthalmology Ward', value: 'ophthalmologyWard' },
            { label: 'Dermatology Ward', value: 'dermatologyWard' },
            { label: 'Urology Ward', value: 'urologyWard' },
            { label: 'Radiology Ward', value: 'radiologyWard' },
            { label: 'Physical Therapy Ward', value: 'physicalTherapyWard' }
        ];


        // Get all the dropdown elements
        const dropdowns = document.getElementsByClassName('ward-list');

        // Populate options for each dropdown
        for (let i = 0; i < dropdowns.length; i++) {
        const dropdown = dropdowns[i];
        
        // Clear existing options
        dropdown.innerHTML = '';

        // Create and append options
        dropdownOptions.forEach(option => {
            const optionElement = document.createElement('option');
            optionElement.textContent = option.label;
            optionElement.value = option.value;
            dropdown.appendChild(optionElement);
        });
        }

    </script>
</body>
</html>