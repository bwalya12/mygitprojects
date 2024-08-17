<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sharing Articles</title>
</head>

<body>
    <?php

    // function to generate share links for Facebook, 
    // facebook

    function generateSocialSharelinks($url, $title)
    {
        $encodedUrl = urlencode($url);
        $encodedTitle = urlencode($title);

        //facebok;
        $facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=$encodedUrl";
        // Output share buttons
        echo "<i class = 'bi bi-share'>
        <a href = '$facebookUrl'target='_blank'>Share on Facebook</a>
        
        </i>";
    }
    //Example usage

    $url = "https://exampl.com/article";
    $title = "Check out this amazing article";
    generateSocialSharelinks($url, $title);
    ?>
</body>

</html>