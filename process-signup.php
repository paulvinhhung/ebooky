<?php
    require_once 'connectdb.php';
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $dateofbirth = $_POST['dateofbirth'];
    
    // Check Empty Email
    if(empty($email)){
        die("Vui lòng nhập Email!");
    }
    // Check Validate Email
    if(!filter_var(($email), FILTER_VALIDATE_EMAIL)){
        die("Địa chỉ Email không hợp lệ!<br>Vui lòng nhập lại!");
    }
    // Check Exist Email
    if($email){
        $sql = "SELECT email FROM information WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
            die("Địa chỉ Email đã tồn tại!<br>Vui lòng nhập lại địa chỉ Email!");
        }
        // mysqli_close($conn);
    }
    // Check Empty Password
    if(empty($pwd)){
        die("Vui lòng nhập Mật khẩu!");
    }
    // Check Constrain Password
    if(strlen($pwd) < 6){
        die("Mật khẩu phải từ 6 ký tự trở lên! Vui lòng nhập lại!");
    }
    // Check Empty Phone number
    if(empty($phonenumber)){
        die("Vui lòng nhập Số điện thoại!");
    }
    // Check Constrain Phone number
    if($phonenumber){
        $filter = "/^((0)+([0-9]{9}))+$/";
        if (!preg_match($filter, ($_POST['phonenumber']))){
            die("Số điện thoại không hợp lệ! Vui lòng nhập lại!\nVí dụ: 0xxxxxxxxx");
        }
    }
    // Check Empty Date of birth
    if(empty($dateofbirth)){
        die("Vui lòng nhập Ngày sinh!");
    }
    
    // Add data into database
    $sql = "INSERT INTO information(email, pwd, phonenumber, dateofbirth) 
            VALUES ('{$email}', '{$pwd}', '{$phonenumber}', '{$dateofbirth}')";
    $result = mysqli_query($conn, $sql);

    if ($result > 0){
        header("Location: ./signup-success.html");
    }
    mysqli_close($conn);
?>