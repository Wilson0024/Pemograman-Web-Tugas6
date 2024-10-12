<?php 

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "admin" && $password == "admin"){
            setcookie("username", $username, time() + (1800), "/"); // Cookie lasts for 1800 sec
            setcookie("logged", "true", time() + (1800), "/"); // Cookie lasts for 1800 sec
    
            echo"<script> alert ('berhasil login');
                          window.location.href = 'dashboard.php';  
                </script>";
            exit();
        }
        else{
            echo"<script> alert ('gagal login')
                window.location.href = 'login.php';    
            </script>";
            exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In & Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Sign In Form -->
        <div class="form-container" id="signInForm">
            <h2>Sign In</h2>
            <form action="login.php" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your email or username" required>
            
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            
                <button type="submit" name="login">Sign in</button>
            </form>
        </div>
    </div> 
    
</body>
</html>
