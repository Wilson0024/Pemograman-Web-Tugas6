<?php 

    if (!isset($_COOKIE["logged"]) && $_COOKIE["logged"] !== true){
        header("Location: login.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard! <?=$_COOKIE["username"]?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>