<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <script>

    </script>
    <?php
    session_start();
    if (isset($_SESSION['succ'])) {


        echo "<div style='text-align:center;'>
        <br>
        <div class = 'btn btn-success'>$_SESSION[succ]</div>
        <br>

        <a href='index1.php'> Upload</a>
        
        </div>";
    } else {
        echo "No new video has been uploaded..!";
    }
    ?>
</body>

</html>