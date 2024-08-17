<?php
session_start();

require_once('db.php');

if (isset($_POST['login'])) {

    // set the variables from the form!

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if (!empty($username) && !empty($password)) {

        //$pwd = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM studen_register WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['success'] = $username;                    
                    header('Location:index.php');
                
            } else {
                $_SESSION['WrongPassword'] = "Wrong password & username combination";
                header("Location:login.php");
            }
        } else {
            echo "No information was found";
        }
    } else {
        echo "The fields are empty";
    }
}
