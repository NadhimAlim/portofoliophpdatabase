<?php
    $hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $namadatabase = "bukutamu";

    $db = mysqli_connect($hostname, $db_username, $db_password, $namadatabase);

    if ($db->connect_error) {
        echo "Database connection failed: " . $db->connect_error;
        die("Eror");
    }
    
?>