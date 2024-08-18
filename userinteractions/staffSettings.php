<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Settings | Ascepius Healthcare [Staff]
    </title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styles/scrollbar.css">
    <link rel="stylesheet" href="./styles/settings.css">
    <script src="./javascripts/staffsettings.js"></script>
</head>
<body>
    <div id="page">
    <?php include '../userui/navigation.php' ?>

        <div class="pgdn">
            <div class="block">
                <?php include '../userui/sidebar_patient.php' ?>
            </div>
            <div class="block">
                <div class="sblk">
                    <h3>Edit Profile :</h3>
                    <div class="supp">
                        <form action="" method="post">
                            <div class="blee">
                                <div class="bli">
                                    <div class="blo">
                                        <label for="name">Name :</label>
                                        <div class="cix">
                                            <input type="text" name="name" id="firstName">
                                            <input type="text" name="name" id="lastName">
                                        </div>
                                    </div>
                                    <div class="blo">
                                        <label for="birthdy">Birthday :</label>
                                        <input type="date" name="birthdy" id="birthdy">
                                    </div>
                                    <div class="blo">
                                        <label for="gender">Gender :</label>
                                        <select id="gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="blo">
                                        <label for="address">Address :</label>
                                        <div class="cix">
                                            <input type="text" name="address" id="street">
                                            <input type="text" name="address" id="district">
                                            <input type="text" name="address" id="postalCode">
                                        </div>
                                    </div>
                                </div>
                                <div class="bli">
                                    <div class="blo">
                                        <label for="email">E-mail :</label>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="blo">
                                        <label for="mobile">Mobile :</label>
                                        <input type="text" id="mobile" name="mobile">
                                    </div>
                                    <div class="blo">
                                        <label for="nicNo">NIC :</label>
                                        <input type="text" name="nicNo" id="nicNo">
                                    </div>
                                    <div class="blo">
                                        <label for="">Profession :</label>
                                        <select id="profession" name="profession" onchange="updateSpecializationDropdown()">
                                            <option value="">Select Profession</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="nurse">Nurse</option>
                                            <option value="attendant">Attendant</option>
                                            <option value="lab technician">Lab Technician</option>
                                            <option value="instructor">Instructor</option>
                                            <option value="management">Management</option>
                                        </select>
                                    </div>
                                    <div class="blo">
                                        <label for="specialization">Specialization :</label>
                                        <select id="specialization" name="specialization">
                                            <option value="">Select Specialization</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="blee">
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Add Documents :</h3>
                    <div class="supp">
                        <form action="" method="post">
                            <div class="blee">
                                <div class="bli">
                                    <div class="blo">
                                        <label for="prfpic">Profile Picture :</label>
                                        <input type="file" name="prfpic" id="prfpic">
                                    </div>
                                    <div class="blo">
                                        <label for="nicScan">NIC Scan :</label>
                                        <input type="file" name="nicScan" id="nicScan">
                                    </div>
                                </div>
                                <div class="bli">
                                    <div class="blo">
                                        <label for="accert">Academic Certificates :</label>
                                        <input type="file" name="accert" id="accert">
                                    </div>
                                    <div class="blo">
                                        <label for="stfcv">Curriculum Vitae :</label>
                                        <input type="file" name="stfcv" id="stfcv">
                                    </div>
                                </div>
                            </div>
                            <div class="blee">
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Add Availability :</h3>
                    <div class="supp">
                        <form action="" method="post">
                            <div class="bol">
                                <p>Can you work on Weekdays :</p>
                                <div class="lbo">
                                    <div class="lob">
                                        <input type="radio" name="avb01" id="yes01">
                                        <label for="yes01">Yes</label>
                                    </div>
                                    <div class="lob">
                                        <input type="radio" name="avb01" id="no01">
                                        <label for="no01">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="bol">
                                <p>Can you work on Weekdays Evening :</p>
                                <div class="lbo">
                                    <div class="lob">
                                        <input type="radio" name="avb02" id="yes02">
                                        <label for="yes02">Yes</label>
                                    </div>
                                    <div class="lob">
                                        <input type="radio" name="avb02" id="no02">
                                        <label for="no02">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="bol">
                                <p>Can you work on Weekends :</p>
                                <div class="lbo">
                                    <div class="lob">
                                        <input type="radio" name="avb03" id="yes03">
                                        <label for="yes03">Yes</label>
                                    </div>
                                    <div class="lob">
                                        <input type="radio" name="avb03" id="no03">
                                        <label for="no03">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="bol">
                                <p>Can you work on Holidays :</p>
                                <div class="lbo">
                                    <div class="lob">
                                        <input type="radio" name="avb04" id="yes04">
                                        <label for="yes04">Yes</label>
                                    </div>
                                    <div class="lob">
                                        <input type="radio" name="avb04" id="no04">
                                        <label for="no04">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="bol">
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Settings :</h3>
                    <div class="supp">
                        <button class="delete">Delete Account</button>
                    </div>
                </div>
            </div>
        </div>

    <?php include '../footer.php' ?>
    </div>
</body>
</html>