<?php

// This file contains the PHP code for connecting to the MySQL database.

// Replace the values in the following variables with your own database credentials.
$host = "172.17.0.2";
$username = "root";
$password = "contra123";
$database = "registration_db";

// Create a new mysqli object and connect to the database.
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Export the mysqli object so it can be used to execute SQL queries.
return $conn;

?>