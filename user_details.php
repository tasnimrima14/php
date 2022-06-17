<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <?php session_start() ?>
</head>
<body>
    Logged in user details:
    <br>
    Username: <?php echo $_SESSION['username']; ?>
    <br>
    Password: <?php echo $_SESSION['password']; ?>

    <a href="logout.php">Logout</a>
    
</body>
</html>