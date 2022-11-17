<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p><b><i>Hey,</b></i> <?php echo $_SESSION['username']; ?>!</p>
        <p><b><i>You are in user dashboard page.</b></p>
            <form method="POST" action="indexx.php">
                <center><input type="submit" value="DashBoard" name="submit" /></center>
            </form>
        <p><a href="logout.php">Logout</a></p></i>
    </div>
</body>
</html>
