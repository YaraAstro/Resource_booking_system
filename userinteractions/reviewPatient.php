<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Review Patient | Ascepius Healthcare
    </title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="./styles/reviewPatient.css">
    <link rel="stylesheet" href="../styles/scrollbar.css">
    <script src="./javascripts/reviewPatient.js"></script>
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
                    <h3>Patient Name</h3>
                    <div class="flx">
                        <div class="flpt">
                            <div class="imap">
                                <img src="../images/portraits/girl002.jpg" alt="profile-picture-of-patient">
                            </div>
                        </div>
                        <div class="flpt">
                            <ul>
                                <li>Patient Name</li>
                                <li>Patient ID</li>
                                <li>Age</li>
                                <li>Date of Birth</li>
                                <li>Gender</li>
                                <li>Blood type</li>
                            </ul>
                        </div>
                        <div class="flpt">
                            <ul>
                                <li>Address</li>
                                <li>Contact No.</li>
                                <li>Email</li>
                            </ul>
                        </div>
                        <div class="flpt">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore rem quae sapiente voluptates, ex, nobis libero iure, voluptatum consectetur at nihil soluta modi voluptatibus. Illum deserunt necessitatibus autem in adipisci voluptatem porro inventore voluptates nostrum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sblk">
                    <h3>Medical Records</h3>
                    <div class="mdrec">
                        <div class="blik">
                            <h4>Medical History</h4>
                            <div class="md-rcs">
                                <ul>
                                    <li>deseace 01 name</li>
                                    <li>deseace 02 name</li>
                                    <li>deseace 03 name</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blik">
                            <h4>Vital Signs</h4>
                            <div class="md-rcs">
                                <ul>
                                    <li>Date</li>
                                    <li>Blood Pressure</li>
                                    <li>Heart Rate</li>
                                    <li>Respiratory Rate</li>
                                    <li>Temperature</li>
                                    <li>Oxygen Saturation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blik">
                            <h4>Lab Results</h4>
                            <ul>
                                <li>Date</li>
                                <li>Test Name</li>
                                <li>Test Category</li>
                                <li>Sample Type</li>
                                <li>Result</li>
                                <li>Lab Technician Name</li>
                            </ul>
                        </div>
                        <div class="blik">
                            <h4>Description</h4>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem at laboriosam reiciendis doloribus architecto omnis dolorem, repudiandae praesentium temporibus odit quidem sint amet. Quidem, dignissimos.
                            </p>
                        </div>
                    </div>
                    <div class="ad-btn">
                        <button onclick="openBlock('presc')">Add Prescription</button>
                        <button onclick="openBlock('labtst')">Add Lab Test</button>
                        <button onclick="openBlock('adrec')">Add Medical Record</button>
                    </div>
                </div>
                <div class="sblk" id="presc">
                    <h3>Add Prescription : <span>Presc_ID</span> </h3>
                    <button class="close" onclick="closeBlock('presc')">&#9587;</button>
                    <div class="presc-cont">
                        <table  id="medTable">
                            <tr>
                                <th>Medication Name</th><th>Dosage</th><th>Frequency</th><th>Duration</th>
                            </tr>
                            <tr>
                                <td> <input type="text" name="med" id="med"> </td>
                                <td> <input type="text" name="med-dos" id="med-dos"> </td>
                                <td> <input type="text" name="med-freq" id="med-freq"> </td>
                                <td> <input type="text" name="med-dur" id="med-dur"> </td>
                                <td> <button onclick="deleteRow()">&#9587;</button>  </td>
                            </tr>
                        </table>
                        <div class="btns">
                            <button onclick="addRow()"> &#9533;</button>
                            <button class="submit" onclick="submitForm()">&#10004;</button>
                        </div>
                    </div>
                </div>
                <div class="sblk" id="labtst">
                    <h3>Request a Laboratory Test : <span>LabTest_ID</span> </h3>
                    <button class="close" onclick="closeBlock('labtst')">&#9587;</button>
                    <div class="lab">
                        <form action="" method="post">
                            <div class="blo">
                                <label for="test-type">Test Type :</label>
                                <input type="text" name="test-type" id="test-type" autocomplete="off" oninput="showSuggestions(event, 'test-type-sugs')" >
                                <div id="test-type-sugs" class="suggestions"></div>
                            </div>
                            <div class="blo">
                                <label for="sample-type">Sample Type :</label>
                                <input type="text" name="sample-type" id="sample-type" autocomplete="off" oninput="showSuggestions(event, 'sample-type-sugs')" >
                                <div id="sample-type-sugs" class="suggestions"></div>
                            </div>
                            <div class="blo">
                                <label for="test-name">Test Name :</label>
                                <input type="text" name="test-name" id="test-name" autocomplete="on" oninput="showSuggestions(event, 'test-name-sugs')" >
                                <div id="test-name-sugs" class="suggestions"></div>
                            </div>
                            <div class="blo">
                                <label for="inst">Instructions :</label>
                                <input type="text" name="inst" id="inst">
                            </div>
                            <div class="blo">
                                <button class="submit" type="submit">&#10004;</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <div class="sblk" id="adrec">
                    <h3>Add Medical Record : <span>Med_Rec_ID</span> </h3>
                    <button class="close" onclick="closeBlock('adrec')">&#9587;</button>
                    <div class="med-rec">
                        <form action="" method="post">
                            <div class="bluu">
                                <div class="blee">
                                    <div class="blo">
                                        <label for="vt-blps">Blood Pressure :</label>
                                        <input type="text" name="vt-blps" id="vt-blps">
                                    </div>
                                    <div class="blo">
                                        <label for="vt-htrt">Heart Rate :</label>
                                        <input type="text" name="vt-htrt" id="vt-htrt">
                                    </div>
                                    <div class="blo">
                                        <label for="vt-rprt">Respiratory Rate :</label>
                                        <input type="text" name="vt-rprt" id="vt-rprt">
                                    </div>
                                    <div class="blo">
                                        <label for="vt-tmpr">Temperature :</label>
                                        <input type="text" name="vt-tmpr" id="vt-tmpr">
                                    </div>
                                    <div class="blo">
                                        <label for="vt-oxst">Oxygen Saturation :</label>
                                        <input type="text" name="vt-oxst" id="vt-oxst">
                                    </div>
                                </div>
                                <div class="blee">
                                    <div class="blo">
                                        <label for="med-cond">Medical Condition :</label>
                                        <input type="text" name="med-cond" id="med-cond">
                                    </div>
                                    <div class="blo">
                                        <label for="med-cond">Allergies :</label>
                                        <input type="text" name="med-cond" id="med-cond">
                                    </div>
                                    <div class="blo">
                                        <label for="med-desc">Description :</label>
                                        <textarea name="med-desc" id="med-desc" ></textarea>
                                    </div>
                                    <div class="blo">
                                        <label for="med-recmnd">Recommendation :</label>
                                        <textarea name="med-recmnd" id="med-recmnd"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="bluu">
                                <button class="submit" type="submit">&#10004;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../footer.php' ?>
    </div>
</body>
</html>