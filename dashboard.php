<?php
session_start();
if(!$_SESSION['logged_in']){
    header("location: error.php");
    exit();
}

$username = $_SESSION['userData']['name'];
$avatar = $_SESSION['userData']['avatar'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="css/style.css">
</head>
<body>
<div class="a">
        <h1>Welcome to the dashboard, </h1>
        <div><img src='<?php echo $avatar;?>'><?php echo $username;?></div>
        <br>
        <br>
        <br>
        <a href="logout.php">logout</a>
    </div>
</body>
</html>