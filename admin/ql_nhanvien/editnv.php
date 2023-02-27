<?php
    
     //nhúng file kết nối

     require_once('../connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$manv=$_POST['txtmanv'];
$tennv=$_POST['txttennv'];
$diachi=$_POST['txtdiachi'];
$gioitinh=$_POST['txtgioitinh'];
$dienthoai=$_POST['txtdienthoai'];

 $sql_update="Update ql_nhanvien set tennv='".$tennv."',diachi='".$diachi."',gioitinh='".$gioitinh."',dienthoai='".$dienthoai."' where manv='".$manv."'";
 $result=$conn->query($sql_update);
 if(!$result)
 {
    echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
 }
 else{
    header('location:http://localhost/MINN Store/admin//ql_nhanvien/viewnv.php');//điều hướng
 }
$conn->close();

?>