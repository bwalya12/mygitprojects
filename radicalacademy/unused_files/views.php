<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>



</head>

<body>
    <div class="container-fluid text-center" style="height: 50px;">
        <div class="shadow-lg p-3 mb-5 bg-white rounded text-center ">

            <h4>Your daily Education Blog Articles Lives here!<h4>
                    <button class="btn btn-dark text-white" ><a href="AdminPost" class="text-decoration-none text-white">Create Post</a></button>


        </div>
    </div>
    <br> <br>
    <?php

    include("logic.php");

    //success message from the post page

    if (isset($_SESSION['successpost'])) {
        $success = $_SESSION['successpost'];

        echo "<div class  = 'container-fluid alert alert-success'>$success </div>";
    }



    $sql = "SELECT * FROM users order by date_posted desc ";

    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results) > 0) {
        while ($rows = mysqli_fetch_assoc($results)) {
            $id = $rows['id'];
            $title = $rows['title'];
            $author = $rows['author'];
            $post = $rows['post'];
            $date = $rows['date_posted'];
            $currentTime = date('F d, Y');

            echo "<div class='container mt-5'>
        <!-- Blog Post Card -->
        <div class='card mb-4 shadow-sm'>
            <div class='card-body'>
                <h1 class='card-title'>$title</h1>
                <div class='mb-3 text-muted'>
                    <span class='author'>Author: $author</span>
                    <span class='date-posted'>| Date Posted: $date</span> 
                </div>
                <p class='card-text'>$post</p>
            </div>
        </div>";
        }
    } else {
        echo "You are all caught up... no posts available!";
    }

    ?>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>