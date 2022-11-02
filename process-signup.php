<?php
    require_once 'connectdb.php';

    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $dateofbirth = $_POST['dateofbirth'];


    // Check Exist Email
    if($email){
        $sql = "SELECT email FROM information WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $message = "Địa chỉ Email đã tồn tại! Vui lòng nhập lại địa chỉ Email!";
            echo "<script type='text/javascript'>alert('$message');
                    window.location.href='./signup.html'</script>";
            exit;
        }
    }
    // Add data into database
    if($email && $pwd && $phonenumber && $dateofbirth){
        $sql = "INSERT INTO information(email, pwd, phonenumber, dateofbirth) 
                VALUES ('{$email}', '{$pwd}', '{$phonenumber}', '{$dateofbirth}')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ./signup-success.html");
    }
?>