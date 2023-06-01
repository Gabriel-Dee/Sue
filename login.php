<?php
require_once('connection.php');
// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT * FROM user WHERE Username = ? AND Password = ?");
    if (!$stmt) {
        die("Error in query preparation: " . $conn->error);
    }

    // Bind parameters and execute the query
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a row is returned
    if ($result->num_rows == 1) {
        // Username and password are correct
        // Perform further actions or redirect to another page
        header("Location: reg.php");
        exit(); // Stop executing the remaining code
    } else {
        // Username or password is incorrect
            session_start();
            $_SESSION['error'] = "Invalid username or password.";
            header("Location: index.php");
            exit();

    }

    // Close the statement
    $stmt->close();

    // Close the connection
    $conn->close();
}
?>