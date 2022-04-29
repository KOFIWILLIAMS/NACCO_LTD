<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacco Limited</title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\Css\style.css">
</head>
<body>

    <div class="container">

        <div class="left-div">
            <div class="left-image">
                <img src="..\images\login.png" alt="">
            </div>
            <div class="left-text">
                <p>Welcome to Nacco Limited</p>
            </div>
        </div>

        <!-- right div start  -->

        <div class="right-div">
            <h4>Welcome</h4>
            <form action="..\db\recieve.php" method="post" class="right-form createNew-form">

                <ul>
                    <li><h3>Create Your Account</h3></li>
                    <li><input type="text" name= "name" placeholder="Full Name" required></li>
                    <li><input type="text" name= "email" placeholder="Mobile Number Or Email" required></li> 
                    <li><input type="password" name= "password" placeholder="Password"></li> 
                    <li><input type="password" name= "Cpassword" placeholder="Confirm Password" required></li> 
                    <li><input type="submit" name= "submit" value="Create"></li>                 
                </ul>

            </form>

            <div class="footer createNew-footer">
                <ul>
                    <li><a href="../index.php">Back</a></li>
                    
                </ul>
            </div>
            <div class="vr-line"></div>
        </div>

    </div>
    
</body>
</html>