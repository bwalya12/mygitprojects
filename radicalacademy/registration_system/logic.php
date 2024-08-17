<?php
session_start();
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['register'])) {
    // removes backslashes
    $username = stripslashes($_POST['username']);
    //escapes special characters in a string
    //$username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_POST['email']);
    //$email = mysqli_real_escape_string($conn, $email);
    $gradelevel = stripslashes($_POST['gradelevel']);
    $password_1 = stripslashes($_POST['password_1']);
    $password_2 = stripslashes($_POST['password_2']);
    //$password = mysqli_real_escape_string($conn, $password);

    //CHECK IF THE FIELDS ARE NOT EMPTY


    if ($username && $email && $password_1 && $password_2 && $gradelevel != "") {

        if ($gradelevel < 0 && $gradelevel > 12) {
            echo "invalid grade level - the grade should only be from 1 - 12";
        }

        // COMPARE THE PASSWORDS!
        if ($password_1 != $password_2) {
            // CATCH THIS ERROR ON THE registration.php page! -- Format it..
            header("Location:registration.php?passwordserror");
        } else {
            if ($password_1 == $password_2) {

                // HASH THE PASSWORD
                $password = password_hash($password_1, PASSWORD_DEFAULT);
                // CHECK IF A USER DO EXIST IN THE DATABASE!

                $UserCheck = "SELECT * FROM studen_register WHERE email = '$email'";

                $results = mysqli_query($conn, $UserCheck);
                if (mysqli_num_rows($results) > 0) {
                    $_SESSION['UserExist'] = " You are already registered!";
                    $_SESSION['UserName'] = $username;
                    header("Location:registration.php");
                    //echo "{$username}, you are registered already! - otherwise, <a href='login.php'>login!</a>";
                } else {
                    // REGISTER A USER
                    $Register = "INSERT INTO studen_register (username, email,gradelevel, password) VALUES ('$username', '$email', '$gradelevel','$password')";

                    $RegisterUser = mysqli_query($conn, $Register);
                    if ($RegisterUser) {
                        $_SESSION['user'] = $username;
                        header("Location:login.php");
                    } else {
                        echo "You are not registered - Call the System Admin For help!" . mysqli_error($conn);
                    }
                }
            }
        }
    } else {
        header("Location:registration.php?fieldEmpty");
        //echo "The fields are empty!";
    }
}

 if(isset($_POST['login'])){

    include ("login.php");

 }