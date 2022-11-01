<?php
    $servername = "sql313.epizy.com";
    $username = "epiz_32908656";
    $password = "v0kv9UN9ndwB8";
    $dbname = "epiz_32908656_ebooky";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    mysqli_set_charset($conn , 'UTF8');

    // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully!";
?>