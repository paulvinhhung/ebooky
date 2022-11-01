<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            h2{
                text-align: center;
                font-family: 'Open Sans', sans-serif;
            }
            form{
                text-align: center;
                font-family: 'Open Sans', sans-serif;
            }
            .remember{
                margin-left: -80px;
                font-size: 14px;
            }
            .form-group label{
                margin-left: -140px;
            }
            .form-control{
                margin: 5px 0px;
            }
            .btn-btn-primary{
                margin-top: 10px;
            }
            p{
                margin-left: 10px;
            }
            .form-group{
                font-family: 'Open Sans', sans-serif;
            }
            input[type="text"] {
                width: 200px;
            } 
            input[type="password"] {
                width: 200px;
            }          
            input[type="submit"] {
                width: 100px;
            }
            .bd{
                border:solid ;
                max-width: 500px;
                justify-content: center;
                
            }
            

            
        </style>
    </head>
    <body>
        <?php
       // require_once 'connect.php';
        ?>
        <div class="bd">
            <h2>Đăng Nhập</h2>
            <div class="dn">
                <form action="connect.php" method="post">
                    
                    <div class="form-group">
                        <label>Tài khoản:</label> <br>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Nhập tên đăng nhập..."> <br>
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu:</label> <br>
                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Nhập mật khẩu..." required> <br>
                    </div>

                    <div class="remember">
                        <input type="checkbox" name="remember"/> Duy trì đăng nhập
                    </div>

                    <div class="form-group">
                    <input type="submit" name="submit" class="btn-btn-primary" value="Đăng nhập">
                    </div>

                    <p>Bạn chưa có tài khoản? <a href="./signup.php">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </body>
</html>