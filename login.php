
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="./assets/css/login-style.css">
    </head>
    <body>
        <div class="main">
            <form action="process-login.php" method="post" id="login" class="login">
                <p><h1 class="heading">ĐĂNG NHẬP</h1></p>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>" placeholder="VD: example@domain.com" required> <br>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="pwd" id="pwd" value="<?php if(isset($_COOKIE['pwd'])){echo $_COOKIE['pwd'];}?>" placeholder="Nhập mật khẩu" required> <br>
                </div>

                <div class="remember">
                    <input type="checkbox" name="remember"/> Duy trì đăng nhập
                </div>

                <div class="form-group">
                <input type="submit" name="btnLogin" class="btnSignup form-submit form-control" value="Đăng nhập">
                </div>

                <p class="question">Bạn chưa có tài khoản? <a href="./signup.html">Đăng ký</a></p>
            </form>
        </div>
    </body>
</html>
