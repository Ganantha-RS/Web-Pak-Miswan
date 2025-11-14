<?php 
    $host = "localhost";
    $db = "tugaspakmiswan";
    $user = "root";
    $password = '';

    $config = mysqli_connect($host, $user, $password, $db);

    if (!$config) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>