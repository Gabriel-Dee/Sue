<?php
require_once('connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $regNo = $_POST['regNo'];

    // Check if the registration number exists in the database
    $query = "SELECT * FROM student WHERE regNo = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $regNo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Registration number exists in the database
        header("Location: student.php");
        exit(); 
        // Perform further actions or redirect to another page
    } else {
        // Registration number does not exist in the database
        session_start();
        $_SESSION['error'] = "Invalid Registration number.";
        header("Location: reg.php");
        exit();
        // Handle the error condition or display an error message
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

