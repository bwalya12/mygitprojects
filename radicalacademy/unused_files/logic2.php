<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php
    include "config.php";
    if (isset($_POST['submit'])) {

        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];

            //validate the following: type, error, size, name, tmp_name

            if ($file['error'] > 0) {
                echo "Some errors here...$file[error]";
            } else {
                // Allow certain types of files to be uploaded


                $allowedFileTypes = array("application/pdf", "application/docx", "image/png", "image/jpeg", "video/mp4", "video/mkv", "video/webm", "video/avi");

                if (!in_array($file['type'], $allowedFileTypes)) {
                    echo ($file['name'] . " is invalid");
                } else {
                    // Check the file Size - if the file type is allowed.
                    $filesize = 100 * 1024 * 1024;
                    if ($file['size'] > $filesize) {
                        echo "The file is too big - max size is 100MB";
                    } else {
                        // if the file is not big, upload it by moving it
                        $FileDirectory = 'uploads/';
                        $uploadedfile = $FileDirectory . basename($file['name']);
                        if (move_uploaded_file($file['tmp_name'], $uploadedfile)) {


                            // uploade/ move all files to the database;

                            $sql = "INSERT INTO fileuploads(file) VALUES ('$uploadedfile')";
                            if (mysqli_query($conn, $sql)) {
                                session_start();
                                $_SESSION['succ'] = "successfully uploaded to database";
                                header("Location:success.php");
                                echo "<br>";
                                exit();
                            }
                        } else {
                            echo "Something is wrong.....";
                        }
                    }
                }
            }
        } else {
            echo "Awaiting ....Select the file.....";
        }
    } else {
        echo "click - to submit";
    }
    ?>
</body>

</html>