<?php
//kết nối
    require_once('../connect.php');
     $mamuc=$_REQUEST['mamuc'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM ql_danhmuc WHERE mamuc='".$mamuc."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('location:http://localhost/MINN Store/admin/ql_danhmuc/viewmuc.php');//điều hướng
    }
?>