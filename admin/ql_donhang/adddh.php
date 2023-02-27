<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Xử lý thông tin đơn hàng</title>
</head>
<body>

<?php
//nhúng file kết nối

    require_once('../connect.php');

    //Thêm dữ liệu
    //Lấy dữ liệu trên form => Insert vào CSDL
    $madh=$_POST['txtmadh'];
    $tenkh=$_POST['txttenkh'];
    $tinhtrang=$_POST['txttinhtrang'];
    $ngaydat=$_POST['txtngaydat'];
    $ghichu=$_POST['txtghichu'];
    
     $sql_insert="Insert into ql_donhang values('".$madh."','".$tenkh."','".$tinhtrang."','".$ngaydat."','".$ghichu."')";
     $result=$conn->query($sql_insert);
     if($result)
     {
         echo "Thêm dữ liệu thành công";
     }
     else{
      echo "Lỗi thêm  ".$sql_insert."<br>".$conn->error;
     }
    $conn->close();
    header('location:http://localhost/MINN Store/admin/ql_donhang/viewdh.php');//điều hướng

?>
</body>
</html>