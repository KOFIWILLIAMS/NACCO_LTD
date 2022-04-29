<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * from new_user where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
        // admin
        $sql1 = "SELECT * from admin where `name` = '$email' and pass = '$password'";  
        $result1 = mysqli_query($conn, $sql1);  
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
        $count1 = mysqli_num_rows($result1);

        if($count >= 1){  
        //  while ($row1 = mysqli_fetch_assoc($result)) {
             session_start();
             $_SESSION['name'] = $name;
             $_SESSION['email'] = $email;
             header("location: ..\screens\home.php");
        //  }
            //echo "<h1><center> Login successful </center></h1>";  
            exit();
        }elseif($count1 ==1){
            header("location: ..\screens\adminhome.php");
        } 
        else{  
            echo "<h1> <center>Login failed. Invalid username or password.</center></h1>";  
        }     
?>  