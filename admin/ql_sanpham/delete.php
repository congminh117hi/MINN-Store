<?php
//kết nối
    require_once('../connect.php');
    $masp=$_REQUEST['masp'];
    //xóa với mã lấy được 
    $dsql_del="DELETE FROM ql_sanpham WHERE masp='".$masp."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('location:http://localhost/MINN Store/admin/ql_sanpham/viewsp.php');//điều hướng
    }
?>