<?php
// Establish a database connection
include '../connect.php';

// Retrieve form data
$Class_Name = $_POST['gpclnm'];
$Class_Description = $_POST['gpcldc'];
$Class_Duration = $_POST['gpcldr'];
$Class_Prerequisites = $_POST['gpclprq'];
$Class_MaxCapacity = (int) $_POST['gpclma'];
$Class_Location = $_POST['gpclloc'];
$Amount = (float) $_POST['gpclpz'];

// Function to generate the ID
function generateID($conn) {
    $query = "SELECT Class_ID FROM Group_Classes ORDER BY Class_ID DESC LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastID = $row["Class_ID"];
        $lastNumber = intval(substr($lastID, 2));
        $newNumber = $lastNumber + 1;
        $newID = "GC" . sprintf("%04d", $newNumber);
    } else {
        $newID = "GC0001";
    }

    return $newID;
}

// Set other variables
$Class_Status = 'available';


// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO Group_Classes (Class_ID, Class_Name, Class_Description, Class_Duration, Class_Location, Class_MaxCapacity, Class_Prerequisites, Class_Status, Amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssisss", $Class_ID, $Class_Name, $Class_Description, $Class_Duration, $Class_Location, $Class_MaxCapacity, $Class_Prerequisites, $Class_Status, $Amount);

if ($stmt->execute()) {
    echo "New group class added successfully.";
} else {
    $trouble = $stmt->error;
    header("Location: ../error.php?value=" . urldecode($trouble));
    exit();
}

// Close the statement and database connection
$stmt->close();
include '../closeConnection.php';
?>