<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Sign Up</title>
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            /* border: 0; */
        }
        td {
            padding: 0 16px;
        }
        .signup {
            /* display: flex; */
            background-image: linear-gradient(to bottom, #4688f1, #5a9edb);
            width: 40%;
            margin: 100px auto ;
            /* text-align: center; */
            font-size: 24px;
            padding: 24px;
            border-radius: 10px;
        }
        input {
            font-size: 22px;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        .mid {
            text-align: center;
        }
        
    </style>
    
    <body>
        <?php
            require_once 'connectdb.php';
        ?>
        <div class="signup">
            <p><h1 class="mid">ĐĂNG KÝ TÀI KHOẢN</h1></p>
            <form action="">
                <p>
                    <input type="email" name="email" id="email" placeholder="Địa chỉ Email">
                </p>
                <p>
                    <input type="password" name="password" id="password" placeholder="Mật khẩu">
                </p>
                <p>
                    <input type="tel" name="phonenumber" id="phonenumber" placeholder="Số điện thoại">
                </p>
                <p>
                    <input type="date" name="dateofbirth" id="dateofbirth" placeholder="Ngày sinh">
                </p>
                <p>
                    <input type="submit" name="btnSignup" id="btnSignup" class="btnSignup" value="Đăng ký">
                </p>
            </form>
        </div>
        <script src="./main.js"></script>
           
    </body>
</html>