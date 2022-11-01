<?php
    require_once 'connectdb.php';
    // $email = $_POST['email'];
    // $email = "vinhhung@gmail.com";
    // print_r($_POST['email']);
    // Check Exist Email
    if($email){
        $sql = "SELECT email FROM information WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            return true;
        }
        return false;
        mysqli_close($conn);
    }
?>