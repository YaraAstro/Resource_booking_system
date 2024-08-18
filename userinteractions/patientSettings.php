<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Settings | Ascepius Healthcare [Patient]
    </title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styles/scrollbar.css">
    <link rel="stylesheet" href="./styles/settings.css">
</head>
<body>
    <div id="page">
    <?php include '../userui/navigation.php' ?>

        <div class="pgdn">
            <div class="block">
                <?php include '../userui/sidebar_doc.php' ?>
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
                    <h3>Edit Gardian Details :</h3>
                    <div class="supp">
                        <form action="" method="post">
                            <div class="lob">
                                <label for="grname">Gardian Name :</label>
                                <input type="text" name="grname" id="grname">
                            </div>
                            <div class="lob">
                                <label for="grnic">Gardian NIC No. :</label>
                                <input type="text" name="grnic" id="grnic">
                            </div>
                            <div class="lob">
                                <label for="grtel">Gardian Mobile :</label>
                                <input type="text" name="grtel" id="grtel">
                            </div>
                            <div class="lob">
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