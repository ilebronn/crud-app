<?php

// Define database connection credentials
$host = 'localhost'; // server name
$username = 'root'; // database username
$password= 'qweewq123321'; // database password
$database = 'crud_app'; // database name

// Create a new database connection using MySQLi object-oriented approach
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if(!$conn) {
    // If connection fails, display an error message and stop the script
    die("Connection Failed: ".mysqli_connect_error());
}else{
    // If connection was successful, display a success message
    //echo "Connected Successfully! Connected to: crud_app";
}
?>