<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>

    <?php session_start() ?>
</head>
<body>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    echo 'Session started';

    ?>
    <br>
    <a href="user_details.php">Click to view user details</a>
    
</body>
</html>