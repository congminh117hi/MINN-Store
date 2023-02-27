<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Xử lý thông tin danh mục</title>
</head>
<body>

<?php
//nhúng file kết nối

    require_once('../connect.php');

    //Thêm dữ liệu
    //Lấy dữ liệu trên form => Insert vào CSDL
    $mamuc=$_POST['txtmamuc'];
    $tenmuc=$_POST['txttenmuc'];
    
     $sql_insert="Insert into ql_danhmuc values('".$mamuc."','".$tenmuc."')";
     $result=$conn->query($sql_insert);
     if($result)
     {
         echo "Thêm dữ liệu thành công";
     }
     else{
      echo "Lỗi thêm  ".$sql_insert."<br>".$conn->error;
     }
    $conn->close();
    header('location:http://localhost/MINN Store/admin/ql_danhmuc/viewmuc.php');//điều hướng

?>
</body>
</html>