<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dtbase = "ebooky";
    // Kết nối cơ sở dữ liệu
    $conn = mysqli_connect($servername,$username,$password,$dtbase);
    mysqli_set_charset($conn, 'UTF8');

    // //Kiểm tra kết nối
    // if(!$conn){
    //     die("Kết nối thất bại!!!". mysqli_connect_error($conn));
    // } echo "Kết nối thành công!!!";
?>