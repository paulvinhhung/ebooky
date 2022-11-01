
<?php
//Kết nối cơ sở dữ liệu
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "thongtin";
    $conn = mysqli_connect($servername, $username, $password, $database);
    //mysqli_set_charset($connect, "utf8"); //công việc truy vấn này có thể đọc và hiểu tiếng Việt
    //if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());

   // echo "Connected successfully";
    //mysqli_close($conn);
?>
<?php

//Lấy dữ liệu từ form gọi tên
if (!isset($_POST['submit']))
{
    exit;
}
$e = $_POST['email'];
$p = $_POST['pwd'];

    //truy vấn dữ liệu - tìm email với password có trong csdl không
    $sql = "SELECT * from ttin where email='$e'";
    //echo $sql; exit;

    //thực thi truy vấn
    $rs = mysqli_query($conn, $sql);
    if(!mysqli_num_rows($rs)){
        echo "Sai email";
        //exit;
    } else {
        $sqlp = "SELECT * from ttin where pwd='$p'";
        //echo $sql; exit;

        //thực thi truy vấn
        $rsp = mysqli_query($conn, $sqlp);
        if(!mysqli_num_rows($rsp)){
            echo "Sai mật khẩu";
        } else {
            echo "Đăng nhập thành công";
            if(isset($_POST['remember'])=="yes")
        {
            setcookie("email", $e, time() + (3600 * 30), "/");
        }
            header("Location: ./main.php"); 
        }
    }


?>



