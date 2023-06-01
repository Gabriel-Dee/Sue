<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <title>Forgot Password?</title>
</head>
<body>
   <h1>Reset Your Password</h1>
         <div id="email">
            <p>Please provide your registered email address so as to send you <br>
            password reset instructions.</p>
            <form action="process.php">
                <div>
                    <label for="email"></label>
                    <input type="email" name="email" id="email"
                    placeholder="Enter your registered email">
                </div>
                <br>
                <br> <br>
               
                    <button type="submit">Submit</button>
                
            </form>
        </div>
    
    
</body>
</html>