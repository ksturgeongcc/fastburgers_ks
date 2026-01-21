<?php

// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'fastburgers';

// Attempt to create a database connection
$conn = new mysqli($host, $username, $password, $database);


// Set the character set after a successful connection
$conn->set_charset('utf8mb4');

// Return the connection for use in controllers
return $conn;
