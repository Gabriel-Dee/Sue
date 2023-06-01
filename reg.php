<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <title>VERIFICATION</title>
</head>
<body>
    <div id="whole_page">
        <div id="authentication">
        <center><img src="images/main-new-logo.jpg" width="10%"></center>
            <h1>
                <i>ARDHI UNIVERSITY</i>
            </h1>
            <?php require_once('include/messages.php') ?>
            <form action="verification.php" method="POST">
            <div id="reg_no">
                <label for="regNo"></label>
                <input type="text" id="regNo" name="regNo"
                placeholder=" Enter Registration-number"><br>
                <br>
                <br>
                <button type="submit">Authenticate</button>
            
            </form>
             
            </div>
        </div>

        
    </div>
</body>
</html>