<?php include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Form</title>
    <!-- Bootstrap CSS -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <body>

        <div class='container mt-5'>
            <h2 class="text-center">Admin</h2>
            <form action='' method='post'>
                <div class='form-group'>
                    <label for='authorName'>Admin Name</label>
                    <input type="text" class='form-control' name='name' placeholder='Enter your name'>
                </div>
                <div class='form-group'>
                    <label for="postTitle">Admin Password</label>
                    <input type='text' class='form-control' name='password' placeholder='Enter the post title'>
                </div>

                <input type='submit' class='btn btn-primary' name='admin' value='login'>
            </form>

        </div>
        <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>
<!-- Security of loggin  -->
<?php
$adminpasswd = md5("mike_@_#$");
$adminName = ("mike");

if (isset($_POST['admin'])) {
    $name = ($_POST['name']);
    $password = md5($_POST['password']);
    // CHECK IF FIELDS ARE EMPTY
    if ($name == "") {
        echo "Name is empty";
    }
    if ($password == "") {
        echo "password is empty";
    }

    // Compare the passwords above
    // Encrpty the above password that created

    if ($adminName == $name) {
        if ($adminpasswd == $password) {
            $_SESSION['name'] = $name;
            $_SESSION['success'] = 'Login Success';

            header("Location:AdminPost.php");
        }
    }
    if ($adminName != $name && $adminpasswd != $password) {
        echo "<br>";
        echo " <div class='container alert alert-danger text-center'>Wrong Password and Name</div>";
    }

    if ($adminName != $name || $adminpasswd != $password)
        echo " <div class='container alert alert-danger text-center'>Either Your Name or Password is Wrongly Entered!!</div>";
}


?>


<!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>