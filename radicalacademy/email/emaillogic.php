<?php


if (isset($_POST['sendemail'])) {
    // //$headers = 'From: mikebwalya7@gmail.com' . "\r\n" .
    //     'Reply-To: mikebwalya7@gmail.com' . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();
    $from = stripslashes($_POST['from']);
    //$to = $_POST['']; // This is not from the form, its independent
    $message = stripslashes($_POST['message']);
    $subject = stripslashes($_POST['subject']);

    // Check for errors 
    if ($from = $message = $subject == !"") {
        if (mail($from, $message, $subject, $headers)) {
            echo "Email sent successful";
        } else {
            echo "Email sent failed";
        }
    } else {
        echo "The fields are empty!";
    }
}





// Email parameters
// ENSURE TO CONFIGURE THE SETTINGS FROM YOUR WEB HOSTING COMPANIES 
//$to = 'profbwalya@gmail.com';
//$subject = 'This is a Testing Email';
//$message = 'This is a test email sent from XAMPP.';

// set $headers to $from
