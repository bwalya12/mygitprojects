<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Student Account</title>

</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['success'])) : ?>
        <div class="mb-5">
            <div class='container-fluid alert alert-success text-center'> You are logged in as: <?php echo $_SESSION['success']; ?></div>
            <!--<div class="container-fluid mt-3 bg-dark text-center">-->
                <!-- CREATE A STUDENT DASHBOARD -->
                <div class="container">
                    <div class="row">
                        <div class="row-sm-8"></div>
                    </div>

                </div>
            <a href="logout.php" class="text-decoration-none"><button class="btn btn-dark text-center">Logout</a></button>
            
           
        </div>



    <?php else : ?>
        <p>"You have to login to view this page!</p>
        <p><a href='login.php'> Login </a></p>
    <?php endif ?>




</body>

</html>