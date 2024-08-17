<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container" style="background-color:aqua; text-align:center; height:50%; width:50%;">
        <form action="" method="post">
            <br> <br>
            Admin:<input name="admin" type="text" placeholder="Password"> <br> <br>
            <br>
            <input type="submit" name="submit" value="Log In">
            <br>

        </form>
    </div>
    <?php
    //login to allow login



    if (isset($_POST['submit'])) {
        $PASS = "mike_bwalya_@_^%";
        if ($PASS === $_POST['admin']) {
            //session_start();

            $_SESSION['success'] = "You are an admin";
            header("Location:index.php?user1=1");
            $_SESSION['Failed'] = "OOps!! - Looks like you are not an admin! - try again";
        }else{

            echo "<p style='color:red; text-align:center'>$_SESSION[Failed]</p>";
        }
    }

    ?>

</body>

</html>