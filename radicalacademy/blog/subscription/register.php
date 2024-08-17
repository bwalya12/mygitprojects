<?php
// CONNECT TO THE SERVER #localserver
include_once("config.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // ESCAPE THE STRINGS
    $name = mysqli_escape_string($conn, $name);
    $email = mysqli_escape_string($conn, $email);
    $phone = mysqli_escape_string($conn, $phone);

    // REMOVE SLASHES AND SPACES

    $name_strip = stripslashes($name);
    $email_strip = stripslashes($email);
    $phone_strip = stripslashes($phone);

    // CHECK FOR ERRORS 
    // create an empty array that will store the errors..
    $errors = array();

    if (empty($name_strip)) {
        array_push($errors, "The name is empty!");
    }
    if (empty($email_strip)) {
        array_push($errors, "The email is empty!");
    }
    if (empty($phone_strip)) {
        array_push($errors, "The phone number is empty!");
    }
    // count errors
    if (count($errors) > 0) {

        foreach ($errors as $error) {
            echo "$error <br> ";
        }
    } else {
        // If no error occurred, then register/subscribe the users
        $sql = " SELECT * FROM subscribers WHERE email = '$email' ";

        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            echo "You are already subscribed!";
        } else {
            // If we could not find any duplicating details, then register/subscribe the user
            $subscribe = "INSERT INTO subscribers (name, email, phone) VALUES ('$name', '$email', '$phone')";
            $results = mysqli_query($conn, $subscribe);
            if ($results) {
                //echo "You are subscribed!";
                header("Location:../");
                exit();
            } else {
                echo "We could not subscribe to our blogs - contact the system admin" . mysqli_error($conn);
            }
        }
    }
}


















// Prepare and bind
// $stmt = $conn->prepare("INSERT INTO subscribers (name, email, phone) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $name, $email, $phone);

// // Set parameters and execute
// $name = htmlspecialchars($_POST['name']);
// $email = htmlspecialchars($_POST['email']);
// $phone = htmlspecialchars($_POST['phone']);
// $stmt->execute();

// echo "New subscription registered successfully";

// $stmt->close();
// $conn->close();
