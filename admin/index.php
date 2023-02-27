<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
     <?php 
    //kết nối
    require_once('./connect.php');
    ?>

<div class="wrapper">
    <div class="sidebar">
        <h2><i class="fas fa-user"></i>Admin</h2>
        <ul>
        <li><a href="./ql_sanpham/viewsp.php"><i class="fas fa-mobile" ></i>Quản lí sản phẩm</a></li>
                <li><a href="./ql_donhang/viewdh.php"><i class="fas fa-cart-arrow-down"></i>Quản lí đơn hàng</a></li>
                <li><a href="./ql_danhmuc/viewmuc.php"><i class="fas fa-address-card"></i>Quản lí danh mục</a></li>
                <li><a href="./ql_khachhang/viewkh.php"><i class="fas fa-project-diagram"></i>Quản lí khách hàng</a></li>
                <li><a href="./ql_nhanvien/viewnv.php"><i class="fas fa-blog"></i>Quản lí nhân viên</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Báo cáo thống kê</a></li>
            <?php if(($_SESSION['login'] <> 1) !== null){
                echo '  
                <li><p>Hello: '.$_SESSION['username'].'</p></li>
                <li><a href="http://localhost/MINN%20Store/views/sign-out.php">Sign-out</a></li>';
            } ?>
        </ul> 
    </div>
    
    <div class="main_content">
        <div class="header">Chào mừng! Chúc bạn một ngày tốt lành</div>  
    </div>
</div>

</body>