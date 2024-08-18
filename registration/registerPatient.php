<?php
// Establish a database connection
include '../connect.php';

// Function to generate the patient ID
function generatePatientID($conn) {
    $query = "SELECT Patient_ID FROM Patients ORDER BY Patient_ID DESC LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastPatientID = $row["Patient_ID"];
        $lastNumber = intval(substr($lastPatientID, 2));
        $newNumber = $lastNumber + 1;
        $newPatientID = "PT" . sprintf("%04d", $newNumber);
    } else {
        $newPatientID = "PT0001";
    }

    return $newPatientID;
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $initials = $_POST["initials"];
    $nic = $_POST["nic"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $bloodtype = $_POST["bloodtype"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $postal = $_POST["postal"];
    $mobile = $_POST["mobile"];
    $tele = $_POST["tele"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the patient is below 18
    $guardianName = "";
    $guardianMobile = "";
    $guardianNIC = "";
    if (isset($_POST["guardianName"]) && isset($_POST["guardianMobile"]) && isset($_POST["guardianNIC"])) {
        $guardianName = $_POST["guardianName"];
        $guardianMobile = $_POST["guardianMobile"];
        $guardianNIC = $_POST["guardianNIC"];
    }

    // Validate form data
    if (empty($name) || empty($initials) || empty($dob) || empty($gender) || empty($bloodtype) || empty($address) ||
        empty($city) || empty($district) || empty($postal) || empty($mobile) || empty($tele) || empty($password)) {
        echo "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif (strlen($password) < 8) {
        echo "Password should be at least 8 characters long.";
    } else {
        // Generate the patient ID
        $patientID = generatePatientID($conn);

        // Insert into Patients table
        $insertPatientQuery = "INSERT INTO Patients (Patient_ID, Name, Name_Initials, NIC, Date_of_Birth, Gender, Blood_type, Address, City, District, Postal_code, Mobile, Tele_No, Email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertPatientQuery);
        $stmt->bind_param("sssssssssssssss", $patientID, $name, $initials, $nic, $dob, $gender, $bloodtype, $address, $city, $district, $postal, $mobile, $tele, $email, $password);
        $stmt->execute();
        $stmt->close();

        // Insert into gardian_details table if patient is below 18
        if (!empty($guardianName) && !empty($guardianMobile) && !empty($guardianNIC)) {
            $insertGuardianQuery = "INSERT INTO gardian_details (Patient_ID, Gardian_Name, Gardian_Mobile, Gardian_NIC) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($insertGuardianQuery);
            $stmt->bind_param("ssss", $patientID, $guardianName, $guardianMobile, $guardianNIC);
            $stmt->execute();
            $stmt->close();
        }

        header("Location: ../login/index.php");
        exit;
    }
}

include '../closeConnection.php';
?>
