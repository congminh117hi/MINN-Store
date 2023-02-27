<?php

    //kết nối đến Csdl
    $host="localhost";
    $user_name="root";
    $pass="";
    $db_name="minn_store";

    //kết nối
    $conn=new mysqli($host,$user_name,$pass,$db_name);
    // if($conn->connect_error){
    //     echo "kết nối không thành công";
    //     $conn->close;
    //     exit();
    // }
        

?>