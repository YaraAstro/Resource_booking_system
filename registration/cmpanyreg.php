<?php
// Establish the database connection
include '../connect.php';

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO third_parties (Company_ID, Company_Name, Company_Type, Web, Hotline, Email, Address, City, District, Postal_code, Description, Logo, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Generate the Company ID (TPXXXX)
$companyID = generateCompanyID($conn);

// Get the form data
$companyName = $_POST['companyName'];
$companyType = $_POST['companyType'];
$web = $_POST['web'];
$hotline = $_POST['hotline'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$district = $_POST['district'];
$postalCode = $_POST['postalCode'];
$description = $_POST['description'];
$logo = $_FILES['logo']['name'];
$password = $_POST['password'];

// Bind parameters to the SQL statement
$stmt->bind_param("sssssssssssss", $companyID, $companyName, $companyType, $web, $hotline, $email, $address, $city, $district, $postalCode, $description, $logo, $password);

// Execute the statement
$stmt->execute();

if ($stmt->affected_rows > 0) {
    // Insertion successful
    echo "Registration successful!";
    header("Location: ../login/index.php");
    exit;
} else {
    // Insertion failed
    echo "Registration failed. Please try again.";
    header("Location: ../error.php");
    exit;
}

// Close the statement and database connection
$stmt->close();
include '../closeConnection.php';

// Function to generate the Company ID
function generateCompanyID($conn) {
    $stmt = $conn->prepare("SELECT MAX(CAST(SUBSTRING(Company_ID, 3) AS UNSIGNED)) AS max_id FROM third_parties");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $maxID = $row['max_id'];

    if ($maxID === null) {
        $newID = 1;
    } else {
        $newID = $maxID + 1;
    }

    return 'TP' . str_pad($newID, 4, '0', STR_PAD_LEFT);
}
?>
