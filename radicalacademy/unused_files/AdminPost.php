<?php include("config.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php

    if (isset($_SESSION['success'])) {
        if (isset($_SESSION['name'])) {
            echo " <div class = 'container-fluid text-center alert alert-success'>You are logged as $_SESSION[name] - Admin
            Only Admins can have access to this page
            <!--<button>-->
            </div>
            <div class='container mt-5' style='width:20cm;'>
        <h2 class='text-center'>Administrator Panel -Blogs</h2>
        <form action='logic.php' method='post'>
            <div class='form-group'>
                <label for='authorName'>Author Name</label>
                <input type='text' class='form-control' name='author' placeholder='Enter your name'>
            </div>
            <div class='form-group'>
                <label for='postTitle'>Post Title</label>
                <input type='text' class='form-control' name='title' placeholder='Enter the post title'>
            </div>
            <div class='form-group'>
                <label for='blogPost'>Blog Post</label>
                <textarea class='form-control' name='post' rows='5' placeholder='Write your blog post here'></textarea>
            </div>
            <input type='submit' class='btn btn-primary' name='submit' value='Create Post'>
        </form>
        <div class='mt-3'>
            <button class='btn btn-dark'><a href='views.php' class='btn btn-link'>Read posts</a></button>
        </div>
    </div>";
        }
    } else {
        echo "<div class =' container-fluid text-center alert alert-info'>You are not an admin <a href='index.php' text-decoration-none text-white>Login to Create a Blog</a>";
    }

    ?>


    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>