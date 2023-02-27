<?php
    
     //nhúng file kết nối

     require_once('../connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$mamuc=$_POST['txtmamuc'];
$tenmuc=$_POST['txttenmuc'];

 $sql_update="Update ql_danhmuc set tenmuc='".$tenmuc."' where mamuc='".$mamuc."'";
 $result=$conn->query($sql_update);
 if(!$result)
 {
    echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
 }
 else{
    header('location:http://localhost/MINN Store/admin//ql_danhmuc/viewmuc.php');//điều hướng
 }
$conn->close();

?>