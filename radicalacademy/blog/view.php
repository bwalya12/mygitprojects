<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Views </title>
</head>

<body>
    <?php

    include "config.php";
    session_start();
    $sql = "SELECT * FROM fileuploads";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {

            $pdf = $rows['file'];
            echo " h2> PDF Viewer</h2>
            <embed src='$pdf' type='application/pdf' width='100%'' height='600px' />'
            ";
        }
    } else {
        echo "No files available";
    }

    ?>
</body>

</html>