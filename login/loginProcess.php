<?php
    require_once '../connect.php';

    session_start();

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $user = $_POST['userid'];
        $pass = $_POST['paswd'];

        // if it's user e-mail
        if (filter_var($user, FILTER_VALIDATE_EMAIL)){
            // Prepare the query for the patient table
            $patientQuery = "SELECT * FROM patients WHERE Email = '$user' AND Password = '$pass'";
            $patientResult = $conn->query($patientQuery);

            // Prepare the query for the staff table
            $staffQuery = "SELECT * FROM staff WHERE Staff_Email = '$user' AND Password = '$pass'";
            $staffResult = $conn->query($staffQuery);

            if ($patientResult->num_rows > 0) {
                // Fetch the patient's information
                $ptData = $patientResult->fetch_assoc();
                $_SESSION['userID'] = $ptData['Patient_ID'];
                $_SESSION['userName'] = $ptData['Name'];
                $_SESSION['profilePic'] = $ptData['Profile_pic'];

                // Redirect to patient dashboard
                header("Location: ../userui/patient.php");
                exit();
            } elseif ($staffResult->num_rows > 0) {// Check if the email and password match in the staff table
                
                // Redirect to staff dashboard
                $staffData = $staffResult->fetch_assoc();
                $profession = $staffData['Prof_Role'];

                // Redirect to the appropriate dashboard based on profession
                switch ($profession) {
                    case 'doctor':
                        $table = "Doctors";
                        $colName = "Doctor_ID";
                        break;
                    case 'nurse':
                        $table = "Nurses";
                        $colName = "Nurse_ID";
                        break;
                    case 'instructor':
                        $table = "Instructors";
                        $colName = "Instructor_ID";
                        break;
                    case 'lab technician':
                        $table = "Lab_Technicians";
                        $colName = "Technician_ID";
                        break;
                    case 'attendant':
                        $table = "Attendants";
                        $colName = "Attendant_ID";
                        break;
                    case 'management':
                        $table = "Admins";
                        $colName = "Admin_ID";
                        break;
                    default:
                        // Handle invalid or unrecognized profession
                        $trouble = "Invalid profession";
                        header("Location: ../error.php?value=".urldecode($trouble));
                        exit();
                        break;
                }

                $query = "SELECT $table.$colName, Staff.First_Name, Staff.Last_Name, Staff.Profile_pic
                            FROM Staff
                            INNER JOIN $table ON Staff.Staff_ID = $table.Staff_ID
                            WHERE Staff.Staff_Email = '$user' AND Staff.Password = '$pass'";

                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    // Fetch the staff member's information
                    $staffData = $result->fetch_assoc();
                    $_SESSION['userID'] = $staffData[$colName];
                    $_SESSION['userName'] = $staffData['First_Name'] . $staffData['Last_Name'];
                    $_SESSION['profilePic'] = $staffData['Profile_pic'];

                    // Redirect to the appropriate dashboard based on profession
                    switch ($profession) {
                        case 'doctor':
                                header("Location: ../userui/doctor.php");
                            exit();
                            break;

                        case 'nurse':
                                header("Location: ../userui/nurse.php");
                            exit();
                            break;

                        case 'lab technician':
                                header("Location: ../userui/labtech.php");
                            exit();
                            break;

                        case 'instructor':
                                header("Location: ../userui/instructor.php");
                            exit();
                            break;

                        case 'attendant':
                                header("Location: ../userui/attendant.php");
                            exit();
                            break;

                        default:
                                // Handle invalid or unrecognized profession
                                $trouble = "Invalid profession";
                                header("Location: ../error.php?value=" . urldecode($trouble));
                                exit();
                            break;
                    }
                }
            }

        } else {
            $trouble = "Enter E-mail or User_ID";
            header("Location: ../error.php?value=" . urldecode($trouble));
            exit();
        }

    } else {
        $trouble = "Something Went Wrong!";
        header('Location: ../error.php?value='.urldecode($trouble));
        exit();
    }

    require_once '../closeConnection.php';
?>
