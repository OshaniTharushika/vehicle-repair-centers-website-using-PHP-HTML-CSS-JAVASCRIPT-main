<?php
    $servername = "localhost";  // Database server
    $username = "root";         // Database username
    $password = "";             // Database password
    $dbname = "autocare";       // Database name
    
    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>