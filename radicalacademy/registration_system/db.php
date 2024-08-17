<?php
    // connecting to the server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        echo "Connection failed" . mysqli_connect_error($conn);
    }


// $table = "CREATE TABLE Studen_register (

// id int(11) AUTO_INCREMENT,
// username varchar(255) NOT NULL,
// email varchar(255) NOT NULL,
// town varchar(255) NOT NULL,
// password varchar(255) NOT NULL,
// gradelevel varchar(255) NOT NULL,
// reg_date datetime  default current_timestamp,
// primary key (id)
// ) ";

// $query = mysqli_query($conn,$table);

// if(!$query){
//     echo "Table failed to create";
// }



?>