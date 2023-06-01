<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">
    <title>Registration</title>
</head>
<body>
    <div id="whole_page">
        <div>
            <h1><i>ONLY AUTHORIZED USERS ARE ALLOWED TO REGISTER</i></h1>
        </div>

        <div id="Sign-Admin">
            <h2>
                <i>ADMIN</i>
            </h2>
            <form action="sign_action.php" method="post">

                <div>
                    <label for="Firstname"></label><br>
                    <input type="text" id="Firstname" name="Firstname"
                    placeholder="First-name" autocomplete="off">
                </div>
                <div>
                    <label for="Lastname"></label><br>
                    <input type="text" id="Lastname" name="Lastname"
                    placeholder="Last-name" autocomplete="off" >
                </div>
                <div>
                    <label for="Username"></label><br>
                    <input type="text" id="Username" name="Username"
                    placeholder="Username" autocomplete="off" >
            
                </div>
                <div>
                    <label for="Password"></label><br>
                    <input type="password" name="Password" id="Password"
                    placeholder="password" autocomplete="off" >
                </div>
                <div>
                    <label for="Password"></label><br>
                    <input type="password" name="Password" id="Password"
                    placeholder="Confirm Password" autocomplete="off" >
                </div>
                <div>
                    <label for="sex"></label><br>
                    <select name="sex" id="sex">
                        <option value="">Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        
                    </select>
                </div>
                <br>
                <div>
                    <label for="PhoneNo"></label><br>
                    <input type="tel" name="PhoneNo" id="phone"
                    placeholder="phone" autocomplete="off">
            
                </div>
                <br>
                
                <div>
                    <label for="email"></label><br>
                    <input type="email" id="email" name="email"
                    placeholder="Email" autocomplete="off">
                </div>
                
                    <br>
                    <button type="submit">Submit</button>
                   
               </div>
            </form>
</body>
</html>