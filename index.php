<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>aruwebsite</title>
</head>
<body>
    <div id="whole_page">
       
        <div id="welcome">
        <div>
        <center><img src="images/main-new-logo.jpg" width="10%"></center>
            <h1>ARDHI UNIVERSITY</h1>
            
        </div>
            <h2>WELCOME</h2>
            <p><span>Security is very essential to many organizations. <br>It has also been a problem,<br>as people do not take proper precautions to protect themselves against attacks,<br>
            This system is hereby to help Ardhi university members,<br>
             to be secured and protect their properties while in the library and <br>
        protect the very confidential data and information from unauthorized people.</p></span>
                <p>
                    <a href="sign.php">Please Register Here</a>
                </p>
        </div>
        <div id="login">

            <h3>
                Admin login
            </h3>
           
            <form action="login.php" method="post">
                <div>
                    <label for="Username"></label><br>
                    <input type="Username"  id="Username" name="Username"
                    placeholder="Username" autocomplete="off">
                </div>
                <div>
                    <label for="Password"></label><br>
                    <input type="Password" id="Password" name="Password"
                    placeholder="Password" autocomplete="off" >
    
                </div>
               
                    <br>
                    <button type="submit" name="signin" id="signin">Login</button>
               
                <br>
    
            </form>
            <p>
                <a href="Resetpassword.php">Forgot Password?</a>
            </p>

            <?php
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo '<p class="error">' . $error . '</p>';
                unset($_SESSION['error']);
            }
            ?>
            
        </div>
       
            
        </div>
        
              
        
     </div>
     </body>
     </html>
