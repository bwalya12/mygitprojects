<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Dashboard - Secured Page</title>
    
</head>

<body>
    <div class="form">
        <p>Dashboard</p>
        <p>This is another secured page.</p>
        <p><a href="index.php">Home</a></p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>