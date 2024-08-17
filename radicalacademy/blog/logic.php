<?php 

include("config.php");

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $author = $_POST['author'];
    $title = $_POST['title'];
    $post = $_POST['post'];

    if(!empty($author) && !empty($title) && !empty($post)){
        // If the values are not empty -- do something..

        $sql = "INSERT INTO users (author, title, post) VALUES ('$author','$title','$post')";

        // Check the results
        if(mysqli_query($conn, $sql)){
            header("Location:index.php?success");

            //echo "successfully posted";
        }else{
            echo "Failed to post".mysqli_error($conn);
        }


    }else{
        header("Location:index.php?empty");
        //echo "Some fields are empty!";
    }
    

}