<?php 


// test database on local 8***************************
$server = "localhost";
$username = "root";
$password = "";
$dbname= "cyberlab";

// // deployed database***************************
// define($server,127.0.0.1:3306);
// define($username,"u221377900_cyberlab_23");
// define($password,"KishaN@12051999@");
// define($dbname,"u221377900_web_cyberlab");


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





// Close connection
$conn->close();



?>