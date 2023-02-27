<?php
//kết nối
    require_once('../connect.php');
     $madh=$_REQUEST['madh'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM ql_donhang WHERE madh='".$madh."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('location:http://localhost/MINN Store/admin/ql_donhang/viewdh.php');//điều hướng
    }
?>