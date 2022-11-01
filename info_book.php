<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sách</title>
    <link rel="stylesheet" href="./assets/css/infobook-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="themify-icons.css">
    <link href=”https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css” rel=”stylesheet”/>
</head>
<body>
    <div class="app">
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
                                <a href="#" class="header_navbar_account">#Tên tài khoản người dùng</a>
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
                    <div class="grid-column__4">
                        <div class="book-info__contain">
                        <?php
                                require_once 'connectdb.php';
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM ebook Where ID = '$id'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                        ?>
                                <img src="<?php echo $row['Poster']?>" class="book_info--poster">
                        </div>
                        <button class="click-bttn">Đọc ngay</button>
                    </div>
                    <div class="grid-column__8">
                         <div class="book-info__contain">
                            <h1><?php echo $row['Bookname']?></h1>
                            <h2>Tác giả: <?php echo $row['Author']?></h2>
                            <h3>Ngày phát hành: <?php echo $row['Datepublish'] ?></h3>
                            <h4>Nội dung chính:</h4>
                            <h4><?php echo $row['Description']?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>