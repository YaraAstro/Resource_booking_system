<?php
// Establish a database connection
include '../connect.php';

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $profession = $_POST["profession"];
    $specialization = $_POST["specialization"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $nic = $_POST["nic"];
    $password = $_POST["password"];

    // Generate staff ID (STXXXX)
    $staffIDQuery = "SELECT MAX(SUBSTRING(Staff_ID, 3)) AS maxID FROM Staff";
    $result = $conn->query($staffIDQuery);
    $row = $result->fetch_assoc();
    $maxID = $row['maxID'];
    $nextID = ($maxID !== null) ? intval($maxID) + 1 : 1;
    $staffID = 'ST' . sprintf("%04d", $nextID);

    // Insert into Staff table
    $insertStaffQuery = "INSERT INTO Staff (Staff_ID, First_Name, Last_Name, Staff_Email, Mobile, Prof_Role, Specialization, Address, City, District, Gender, Date_of_Birth, NIC, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertStaffQuery);
    $stmt->bind_param("ssssssssssssss", $staffID, $firstName, $lastName, $email, $mobile, $profession, $specialization, $address, $city, $district, $gender, $dob, $nic, $password);
    $stmt->execute();
    $stmt->close();

    // Insert into respective table based on profession
    switch ($profession) {
        case 'doctor':
            // Generate doctor ID (DCXXXX)
            $doctorIDQuery = "SELECT MAX(SUBSTRING(Doctor_ID, 3)) AS maxID FROM Doctors";
            $result = $conn->query($doctorIDQuery);
            $row = $result->fetch_assoc();
            $maxID = $row['maxID'];
            $nextID = ($maxID !== null) ? intval($maxID) + 1 : 1;
            $doctorID = 'DC' . sprintf("%04d", $nextID);

            // Insert into Doctors table
            $insertDoctorQuery = "INSERT INTO Doctors (Doctor_ID, Staff_ID, Specialization, Qualifications, License_Number, Active_Status, password) VALUES (?, ?, ?, '', '', true, ?)";
            $stmt = $conn->prepare($insertDoctorQuery);
            $stmt->bind_param("ssss", $doctorID, $staffID, $specialization, $password);
            $stmt->execute();
            $stmt->close();
            break;

        case 'nurse':
            // Generate nurse ID (NSXXXX)
            $nurseIDQuery = "SELECT MAX(SUBSTRING(Nurse_ID, 3)) AS maxID FROM Nurses";
            $result = $conn->query($nurseIDQuery);
            $row = $result->fetch_assoc();
            $maxID = $row['maxID'];
            $nextID = ($maxID !== null) ? intval($maxID) + 1 : 1;
            $nurseID = 'NS' . sprintf("%04d", $nextID);

            // Insert into Nurses table
            $insertNurseQuery = "INSERT INTO Nurses (Nurse_ID, Staff_ID, Specialization, Qualifications, License_Number, Active_Status, password) VALUES (?, ?, ?, '', '', true, ?)";
            $stmt = $conn->prepare($insertNurseQuery);
            $stmt->bind_param("ssss", $nurseID, $staffID, $specialization, $password);
            $stmt->execute();
            $stmt->close();
            break;

        case 'lab technician':
            // Generate technician ID (LTXXXX)
            $technicianIDQuery = "SELECT MAX(SUBSTRING(Technician_ID, 3)) AS maxID FROM Lab_Technicians";
            $result = $conn->query($technicianIDQuery);
            $row = $result->fetch_assoc();
            $maxID = $row['maxID'];
            $nextID = ($maxID !== null) ? intval($maxID) + 1 : 1;
            $technicianID = 'LT' . sprintf("%04d", $nextID);

            // Insert into Lab_Technicians table
            $insertTechnicianQuery = "INSERT INTO Lab_Technicians (Technician_ID, Staff_ID, Specialization, Qualifications, License_Number, Active_Status, password) VALUES (?, ?, ?, '', '', true, ?)";
            $stmt = $conn->prepare($insertTechnicianQuery);
            $stmt->bind_param("ssss", $technicianID, $staffID, $specialization, $password);
            $stmt->execute();
            $stmt->close();
            break;

        case 'instructor':
            // Generate instructor ID (HIXXXX)
            $instructorIDQuery = "SELECT MAX(SUBSTRING(Instructor_ID, 3)) AS maxID FROM Instructors";
            $result = $conn->query($instructorIDQuery);
            $row = $result->fetch_assoc();
            $maxID = $row['maxID'];
            $nextID = ($maxID !== null) ? intval($maxID) + 1 : 1;
            $instructorID = 'HI' . sprintf("%04d", $nextID);

            // Insert into Instructors table
            $insertInstructorQuery = "INSERT INTO Instructors (Instructor_ID, Staff_ID, Specialization, Qualifications, Active_Status, password) VALUES (?, ?, ?, '', '', true, ?)";
            $stmt = $conn->prepare($insertInstructorQuery);
            $stmt->bind_param("ssss", $instructorID, $staffID, $specialization, $password);
            $stmt->execute();
            $stmt->close();
            break;

        case 'attendant':
            // Generate attendant ID (ATXXXX)
            $attendantIDQuery = "SELECT MAX(SUBSTRING(Attendant_ID, 3)) AS maxID FROM Attendants";
            $result = $conn->query($attendantIDQuery);
            $row = $result->fetch_assoc();
            $maxID = $row['maxID'];
            $nextID = ($maxID !== null) ? intval($maxID) + 1 : 1;
            $attendantID = 'AT' . sprintf("%04d", $nextID);

            // Insert into Attendants table
            $insertAttendantQuery = "INSERT INTO Attendants (Attendant_ID, Staff_ID, Active_Status, password) VALUES (?, ?, true, ?)";
            $stmt = $conn->prepare($insertAttendantQuery);
            $stmt->bind_param("sss", $attendantID, $staffID, $password);
            $stmt->execute();
            $stmt->close();
            break;

        case 'management':
            // Generate attendant ID (ATXXXX)
            $adminIDQuery = "SELECT MAX(SUBSTRING(Admin_ID, 3)) AS maxID FROM Admins";
            $result = $conn->query($adminIDQuery);
            $row = $result->fetch_assoc();
            $maxID = $row['maxID'];
            $nextID = ($maxID !== null) ? intval($maxID) + 1 : 1;
            $adminID = 'AD' . sprintf("%04d", $nextID);

            // Insert into Admins table
            $insertAdminQuery = "INSERT INTO Admins (Admin_ID, Staff_ID, Active_Status, password) VALUES (?, ?, true, ?)";
            $stmt = $conn->prepare($insertAdminQuery);
            $stmt->bind_param("sss", $adminID, $staffID, $password);
            $stmt->execute();
            $stmt->close();
            break;
    }

    // Redirect to a success page or perform any additional actions
    header("Location: ../login/index.php");
    exit();
}

include '../closeConnection.php';
?>
