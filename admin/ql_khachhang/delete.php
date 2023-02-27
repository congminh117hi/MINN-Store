<?php
//kết nối
    require_once('../connect.php'); 
     $makh=$_REQUEST['makh'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM ql_khachhang WHERE makh='".$makh."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('location:http://localhost/MINN Store/admin/ql_khachhang/viewkh.php');//điều hướng
    }
?>