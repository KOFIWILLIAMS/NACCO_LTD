<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=".\Css\style.css">
</head>
<body>

    
<!-- // validation for empty field  
https://codeshack.io/secure-login-system-php-mysql/
-->  

    <script>  
            function validation()  
            {  
                var id=document.login.email.value;  
                var ps=document.login.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  



    <div class="container">

        <div class="left-div">
            <div class="left-image">
                <img src="..\images\login.png" alt="">
            </div>
            <div class="left-text">
                <p>Nacco Limited - Excellent in delivery</p>
            </div>
        </div>

        <!-- right div start  -->

        <div class="right-div">
            <h4>Welcome Back</h4>
            
            <form name="login" action = ".\db\login_Auth.php" onsubmit = "return validation()" method = "POST" class="right-form">

                <ul>
                    <li><h3>Login Your Account</h3></li>
                    <li><i class="fas fa-user"></i> <input type="text" name="email" placeholder="Username" ></li>
                    <li><i class="fas fa-lock"></i> <input type="password" name="password" placeholder="Password" ></li>
                    <li><input type="submit" value="Login"></li>
                </ul>

            </form>

            <div class="footer">
                <ul>
                   <!-- <li><a href="Create New.php">Create account</a></li> -->
                    <li><a href=".\auth\Create New.php">Create account</a></li>
                    <li><a href=".\auth\Forgot Password.php">Forgot password?</a></li>
                </ul>
            </div>
            <div class="vr-line"></div>
        </div>

    </div>
    
</body>
</html>