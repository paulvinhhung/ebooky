<?php
    session_start();
?>
<?php
    //Kết nối cơ sở dữ liệu
    require_once 'connectdb.php';

    //Lấy dữ liệu từ form gọi tên
    // if (!isset($_POST['submit']))
    //     {
    //         exit;
    //     }
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    //câu truy vấn dữ liệu - tìm email với password có trong csdl không
    $sql = "SELECT * FROM information WHERE email = '$email'";

    //thực thi truy vấn
    $result = mysqli_query($conn, $sql);
    if(!mysqli_num_rows($result)){
        $message = "Email này chưa được đăng ký!";
            echo "<script type='text/javascript'>alert('$message');
                    window.location.href='./login.html'</script>";
            exit;
    } else {
        $sqlp = "SELECT * FROM information WHERE pwd = '$pwd'";
        //echo $sql; exit;

        //thực thi truy vấn
        $resultp = mysqli_query($conn, $sqlp);
        if(!mysqli_num_rows($resultp)){
            $message = "Sai mật khẩu! Vui lòng nhập lại!";
            echo "<script type='text/javascript'>alert('$message');
                    window.location.href='./login.html'</script>";
            exit;
        } else {

            echo "Đăng nhập thành công";
            $_SESSION['email'] = $_POST["email"];
            if(isset($_POST['remember']) == "yes"){
                setcookie("email", $email, time() + (3600 * 30), "/");
            }
            header("Location: ./index.php");
        }
    }


?>



