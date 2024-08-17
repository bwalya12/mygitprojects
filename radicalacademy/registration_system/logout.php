<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
   unset($_SESSION['success']);
// Redirecting To Home Page
header("Location: login.php");
}
