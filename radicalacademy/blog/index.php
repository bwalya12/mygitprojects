<?php include("config.php");

if (isset($_GET['empty'])) {
    echo "<div class='container-fluid alert alert-danger text-center'> The Fields are empty</div>";
}
if (isset($_GET['success'])) {
    echo "<div class='container-fluid alert alert-success text-center'>Your post was successfully posted!</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Blogs</title>
</head>

<body>
    <?php

    session_start();
    if (isset($_GET['user1']) && $_GET['user1'] == '1') {
        echo "<p style='color:green; text-align:center;'> $_SESSION[success] - Logged In success..</p>";
    } else {
        //echo "Not allowed to view this page";
    }

    ?>
    <form action="logic.php" method="post" enctype="multipart/form-data">
        <br> <br>
        <input type="text" name="author" placeholder="Author's name">
        <br> <br>
        <input type="text" name="title" placeholder="Post title">
        <br> <br>
        <textarea rows="4" cols="50 " name="post" placeholder="Type your Post..."></textarea>
        <br> <br>

        <input type="submit" name="submit" value="Post">


    </form>
    <p><a href="views.php">Read posts </a></p>
    <?php require_once("./myfooter/footer.php") ?>
</body>

</html>