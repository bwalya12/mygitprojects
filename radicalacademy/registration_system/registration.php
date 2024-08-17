<?php
session_start();



?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Registration</title>
    <style>
        body {
            background-color: whitesmoke;

            .myForm {
                margin-top: 12px;

            }
        }
    </style>

</head>

<body>

    <!--<h1 style="text-align:center;">Student Registration</h1>-->

    <div style="text-align:center; background-color:white; margin-left:50%; margin-right:12.5%; height:15cm;">

        <!-- CATCHING THE ERRORS FOR EMPTY FIELDS-->
        <?php
        if (isset($_GET['fieldEmpty'])) : ?>
            <div style="color:red;">Input fields are empty!</div>


        <?php endif ?>
        <?php

        // CATCH ERRORS FOR USER ALREADY IN THE SYSTEM

        if (isset($_SESSION['UserName'])) {
            if (isset($_SESSION['UserExist'])) {
                echo "<div style='color:red;'>" . $_SESSION['UserName'] . ', ' . $_SESSION['UserExist'] . 'Please login!';
                "</div>";
                if (session_destroy()) {
                    header("Location:registration.php");
                }
            }
        }


        ?>

        <form class="myForm shadow-sm p-3 mb-5 bg-body rounded" action="logic.php" method="post" enctype="multipart/form-data" style="padding-top:2cm;">
            <div class="container-fluid">
                <p style="text-align:center; font-size:x-large">
                    Radical Academy
                </p>

            </div>
            <!-- USERNAME -->
            <div class="mb-3">

                <input type="text" name="username" class="form-control-sm" placeholder="Enter Your Name">
            </div>


            <!-- email for students/parents  -->
            <div class="mb-3">

                <input type="email" name="email" class="form-control-sm" placeholder="Enter Your Email">
            </div>
            <!-- TOWN (where the students lives) -->

            <div class="mb-3">

                <input type="text" name="town" class="form-control-sm" placeholder="Enter your town">
            </div>
            <!-- GRADE LEVEL (from grade 1 to 12) -->
            <div class="mb-3">

                <input type="number" name="gradelevel" class="form-control-sm" placeholder="Enter Grade Level - e.g 12">
            </div>
            <!-- PASSWORD 1  -->
            <div class="mb-3">

                <input type="password" name="password_1" class="form-control-sm" placeholder="Create Password">
            </div>
            <!-- PASSWORD 2 -->
            <div class="mb-3">
                <input type="password" name="password_2" class="form-control-sm" placeholder="Repeat Password">
                <br> <br>
            </div>
            <!-- BUTTON FOR SUBMITTING -->
            <button type="submit" name="register" class="btn btn-dark">Register Now</button>

            <hr>
            <p style="margin-right:10%;"> Registered ? <span> <a href="/registration_system/login.php" class="text-decoration-none "><button class="btn btn-dark">Login</button> </a> </span></p>

        </form>
    </div>






</body>

</html>