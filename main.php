<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBOOKY</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div class="website">
        <header class="header">
            <div class="grid">
                <div class="header-contain">
                    <div class="header_logo">
                        <h1>EBOOKY</h1>
                        <li class="header_navbar_list">
                            
                    </div>
                    <div class="header_navbar">
                            <ul class="header_navbar_list_item">
                                <a href="#" class="header_navbar_account">Trang chủ</a>
                            </ul>
                            <ul class="header_navbar_list_item">
                                <a href="#" class="header_navbar_account">Review sách</a>
                            </ul>
                                <ul class="header_navbar_list_item">
                                <a href="#" class="header_navbar_account">Tài khoản</a>
                            </ul>
                            <ul class="header_navbar_list_item">
                                <a href="./logout.php" class="header_navbar_account">Đăng xuất</a>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="grid">
                <div class="grid-row">
                    <div class="grid-column__2">
                        <div class="cotainer-navbar-menu">
                            <h2 class="cotainer-navbar-menu__header">Các thể loại sách</h2>
                            <ul class="container-navbar-menu__list">
                                <li class="container-navbar-menu__item">Sách mới</li>
                                <li class="container-navbar-menu__item">Tiểu thuyết</li>
                                <li class="container-navbar-menu__item">Ngôn tình</li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-column__10">
                        <div class="grid-row">
                            <?php 
                                require_once 'connectdb.php';
                                $sql = "SELECT * FROM ebook";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0 ){
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                <div class="grid-column__2-3">
                                    <a class="container-book__box" href="./info_book.php?id=<?php echo $row['ID']?>">
                                        <div class="container-book__img" style="background-image: url(<?php echo $row['Poster']?>)"></div>
                                        <h4 class="container-book-item__namebook"><?php echo $row['Bookname']?></h4>
                                        <h5 class="container-book-item__nameauthor"><?php echo $row['Author']?></h5>
                                    </a>
                                </div>
                            <?php }  }else{
                                echo "0 result";} 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>