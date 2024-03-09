<?php
    //Local variables for database connection
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'user';

    //mysqli syntax to connect through the MySQL database
    $conn = new mysqli($host, $username, $password, $database);
    
    //Error handling for connection error
    if ($conn->connect_error) {
        die("Connection to database failed: " . $conn->connect_error);
    }
?>