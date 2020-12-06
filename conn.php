<?php
    $username = "root";
    $password="";
    $servername = "localhost";
    $database = "coronadb";

    // create a connection

    $conn = mysqli_connect($servername,$username,$password,$database);

   

    if(!$conn){
        die("connection failed due to this error..".mysqli_connect_error());
    }
    else{
        // echo "connection successful";
    }

    // create table
// $createtable =  "CREATE TABLE ITLABexercise(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(100) NOT NULL , password CHAR(40) NOT NULL, phonenumber VARCHAR(10),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
// if (mysqli_query($conn, $createtable)) {
//     echo "Table MyGuests created successfully";
//   } else {
//     echo "Error creating table: " . mysqli_error($conn);
//   }
// mysqli_close($conn);
?>