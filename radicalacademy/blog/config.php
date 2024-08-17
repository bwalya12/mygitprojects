<?php

// Setup the varaibles 
$servername = "localhost";
$username = "root";
$password = "";
$db = "users";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    echo "<p style='color:red;'>Connection failed</p>";
}
#CREATE THE DATABASE
#database users

/*
1. name of author
2. title of the blog
3. date posted 
4. actual blog post
5. attach picture to the blog
*/

// $sql = "CREATE TABLE users(
//     id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
//     author VARCHAR(255) NOT NULL,
//     title VARCHAR(255) NOT NULL,
//     post TEXT,
//     date_posted DATETIME NOT NULL
// )";



// if (!mysqli_query($conn, $sql)) {
//     echo "Table not created";
// } else {
//     echo "Table created";
// }
