<?php
    
     //nhúng file kết nối

     require_once('../connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$madh=$_POST['txtmadh'];
$tenkh=$_POST['txttenkh'];
$tinhtrang=$_POST['txttinhtrang'];
$ngaydat=$_POST['txtngaydat'];
$ghichu=$_POST['txtghichu'];

 $sql_update="Update ql_donhang set tenkh='".$tenkh."',tinhtrang='".$tinhtrang."',ngaydat='".$ngaydat."',ghichu='".$ghichu."' where madh='".$madh."'";
 $result=$conn->query($sql_update);
 if(!$result)
 {
    echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
 }
 else{
    header('location:http://localhost/MINN Store/admin//ql_donhang/viewdh.php');//điều hướng
 }
$conn->close();

?>