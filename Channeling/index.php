<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Channel a Doctor | Ascepius Healthcare</title>
    <link rel="icon" href="..\images\logo.png">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="../styles/scrollbar.css">
    <script src="./javascripts/scripts.js"></script>
</head>
<body>

    <div id="page">
        <?php include '../navBar.php' ?>

        <div class="pgdn">
            <div class="frame">
                <!-- filters -->
                <div class="filter-box">
                    <div class="box">
                        <p class="filnm">Gender</p>
                        <div class="blo">
                            <div class="blew">
                                <input type="radio" name="gender" id="male">
                                <label for="male">Male</label>
                                <span class="rad"></span>
                            </div>
                            <div class="blew">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="rad"></span>
                            </div>
                        </div> 
                    </div>
                    <div class="box">
                        <p class="filnm">Session Time</p>
                        <div class="blo">
                            <div class="blew">
                                <input type="radio" name="sestime" id="morning">
                                <label for="morning">Morning</label>
                                <span class="rad"></span>
                            </div>
                            <div class="blew">
                                <input type="radio" name="sestime" id="evening">
                                <label for="evening">Evening</label>
                                <span class="rad" ></span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label class="filnm" for="branches">Select Location</label>
                        <div class="blo">
                            <select id="branches"></select>
                        </div>
                    </div>
                    <div class="box">
                        <label class="filnm" for="pric">Price Range</label>
                        <div class="blo">
                            <p> Rs. 1000.00</p>
                            <input min="1000" max="25000" value="10000" type="range" name="pric" id="pric" oninput="updateRangeValue();">
                            <p>Rs. <span id="przval">10000</span>.00</p>
                        </div>
                    </div>
                    <div class="box">
                        <label  class="filnm" for="specialists">Specialization</label>
                        <div class="blo">
                            <select id="specialists"></select>
                        </div>
                    </div>
                    <div class="box">
                        <label class="filnm" for="date">Date</label>
                        <div class="blo">
                            <input type="date" name="date" id="date">
                        </div>
                    </div>
                    <button type="submit">Filter</button>
                </div>        
            </div>

            <div class="frame">
                <!-- search bar -->
                <div class="search-box">
                    <input type="search" placeholder="Enter Doctor Name" name="search" id="search">
                    <button type="submit"><img src="./images/search_FILL0_wght400_GRAD0_opsz48.svg" alt="search logo"></button>
                </div>
                <!-- where the doctor list will appears -->
                <div class="content-list">
                    <div class="doc-cont">
                        <h2>Doctor Name</h2>
                        <h4>Specialization</h4>
                        <div class="dcfl">
                            <div class="flct">
                                <div class="imap">
                                    <img src="../images/portraits/man.jpg" alt="profile-pic-of-doctor">
                                </div>
                            </div>
                            <div class="flct">
                                <h4>Branch / location</h4>
                                <h4>Session Time</h4>
                                <p>Prize</p>
                            </div>
                        </div>
        
                    </div>
                    <div class="doc-cont">
                        <h2>Doctor Name</h2>
                        <h4>Specialization</h4>
                        <div class="dcfl">
                            <div class="flct">
                                <div class="imap">
                                    <img src="../images/portraits/man.jpg" alt="profile-pic-of-doctor">
                                </div>
                            </div>
                            <div class="flct">
                                <h4>Branch / location</h4>
                                <h4>Session Time</h4>
                                <p>Prize</p>
                            </div>
                        </div>
        
                    </div>
                    <div class="doc-cont">
                        <h2>Doctor Name</h2>
                        <h4>Specialization</h4>
                        <div class="dcfl">
                            <div class="flct">
                                <div class="imap">
                                    <img src="../images/portraits/man.jpg" alt="profile-pic-of-doctor">
                                </div>
                            </div>
                            <div class="flct">
                                <h4>Branch / location</h4>
                                <h4>Session Time</h4>
                                <p>Prize</p>
                            </div>
                        </div>
        
                    </div>
                    <div class="doc-cont">
                        <h2>Doctor Name</h2>
                        <h4>Specialization</h4>
                        <div class="dcfl">
                            <div class="flct">
                                <div class="imap">
                                    <img src="../images/portraits/man.jpg" alt="profile-pic-of-doctor">
                                </div>
                            </div>
                            <div class="flct">
                                <h4>Branch / location</h4>
                                <h4>Session Time</h4>
                                <p>Prize</p>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>

        <?php include '../footer.php' ?>
    </div>
    

    <script>
        /* specialization & Location menu */
        var DocSpecs = [ "General surgeon" , "Cardiologist" , "Dermatologist" , "Gastroenterologist" , "Neurologist" , "Orthopedic surgeon" , "Psychiatrist" , "Pediatrician" , "Obstetrician/Gynecologist" , "Ophthalmologist" , "Otolaryngologist" , "Pulmonologist" , "Endocrinologist" , "Urologist" , "Nephrologist" , "Hematologist" , "Oncologist", "Rheumatologist", "Allergist/Immunologist", "Neurosurgeon"];
        var SpecMenu = document.getElementById("specialists");
        var HosLocs = [ "Maharagama", "Badulla", "Thangalla" ,"Anuradhapura" , "Kadugannawa" , "Galle" ]
        var LocMenu = document.getElementById("branches");

        for (var i = 0; i < DocSpecs.length; i++) {
            var option = document.createElement("option");
            option.text = DocSpecs[i];
            SpecMenu.add(option);
        };

        for (var j = 0; j < HosLocs.length; j++) {
            var optn = document.createElement("option");
            optn.text = HosLocs[j];
            LocMenu.add(optn);
        };
    </script>
</body>
</html>