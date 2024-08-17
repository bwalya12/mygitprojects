<?php

// Setup the varaibles 
$servername = "localhost";
$username = "root";
$password = "";
$db ="users"; 
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
    echo "<p style='color:red;'>Connection failed</p>";
}
// CREATE THE TABLE 'Subscribers'
// $sql = "CREATE TABLE subscribers (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     phone VARCHAR(15) NOT NULL,
//     subscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";

// if(mysqli_query($conn, $sql)){

//     echo "The table was created";
// }else{
//     echo "Table creation failed!".mysqli_error($conn);
// }

// ?>