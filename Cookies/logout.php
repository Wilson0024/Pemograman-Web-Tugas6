<?php 
    setcookie("username", "", time() - 3600, "/"); // go back to the past so it will expire
    setcookie("logged", "", time() - 3600, "/"); // go back to the past so it will expire

    header("Location: login.php");
    exit();
?>