<?php
   
     //nhúng file kết nối

      require_once('../connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$masp=$_POST['txtmasp'];
$tensp=$_POST['txttensp'];
$kieudang=$_POST['txtkieudang'];
$soluong=$_POST['txtsoluong'];
$ngaysx=$_POST['txtngaysx'];

   $sql_update="Update ql_sanpham set tensp='".$tensp."', kieudang='".$kieudang."',soluong='".$soluong."',ngaysx='".$ngaysx."' where masp='".$masp."'";
   $result=$conn->query($sql_update);
   if(!$result)
   {
      echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
   }
   else{
      header('location:http://localhost/MINN Store/admin//ql_sanpham/viewsp.php');//điều hướng
   }
$conn->close();

?>