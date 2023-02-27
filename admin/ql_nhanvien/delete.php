<?php
//kết nối
    require_once('../connect.php');
     $manv=$_REQUEST['manv'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM ql_nhanvien WHERE manv='".$manv."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('location:http://localhost/MINN Store/admin/ql_nhanvien/viewnv.php');//điều hướng
    }
?>