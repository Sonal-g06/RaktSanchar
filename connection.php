<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "raktsanchar";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn->select_db($dbname)) {
        die("Failed to select database: " . $conn->error);
    }
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
