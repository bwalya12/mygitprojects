<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>
    <?php

    include("config.php");
    if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $author = $_POST['author'];
        $title = $_POST['title'];
        $post = $_POST['post'];

        if (!empty($author) && !empty($title) && !empty($post)) {
            // If the values are not empty -- do something..

            $sql = "INSERT INTO users (author, title, post) VALUES ('$author','$title','$post')";

            // Check the results
            if (mysqli_query($conn, $sql)) {
                session_start();
                $_SESSION['successpost'] = "post successfully created";
                header("Location:views.php");
                exit();
                //echo "successfully posted";
            } else {
                echo "Failed to post" . mysqli_error($conn);
            }
        } else {
            echo "<div class='alert alert-danger'>Some fields are empty!</div>";
        }
    }

    ?>
    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>