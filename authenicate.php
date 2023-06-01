<?php
session_start();

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arulibrary";

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $regNo = $_POST['regNo'];

    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT * FROM student WHERE RegNo = ?");
    if (!$stmt) {
        die("Error in query preparation: " . $conn->error);
    }

    // Bind parameter and execute the query
    $stmt->bind_param("s", $regNo);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a row is returned
    if ($result->num_rows == 1) {
        // Student found, redirect to student.php
        $_SESSION['regNo'] = $regNo;
        header("Location: student.php");
        exit();
    } else {
        // Student not found
        $_SESSION['error'] = "Student not found.";
        header("Location: verification.php");
        exit();
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
