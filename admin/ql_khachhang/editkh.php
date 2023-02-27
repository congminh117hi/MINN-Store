<?php
    
     //nhúng file kết nối

     require_once('../connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$makh=$_POST['txtmakh'];
$tenkh=$_POST['txttenkh'];
$diachi=$_POST['txtdiachi'];
$email=$_POST['txtemail'];
$dienthoai=$_POST['txtdienthoai'];
$ngaytao=$_POST['txtngaytao'];

 $sql_update="Update ql_khachhang set tenkh='".$tenkh."',diachi='".$diachi."',email='".$email."',dienthoai='".$dienthoai."',ngaytao='".$ngaytao."' where makh='".$makh."'";
 $result=$conn->query($sql_update);
 if(!$result)
 {
    echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
 }
 else{
    header('location:http://localhost/MINN Store/admin/ql_khachhang/viewkh.php');//điều hướng
 }
$conn->close();

?>