<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lí thông tin sản phẩm</title>
</head>
<body>
    <?php
    //nhung file ket noi

    require_once('../connect.php');

    //them du lieu
    // lay du lieu tren form nhap , insert vao csdl
    $masp = $_POST['txtmasp'];
    $tensp = $_POST['txttensp'];
    $kieudang = $_POST['txtkieudang'];
    $soluong = $_POST['txtsoluong'];
    $ngaysx = $_POST['txtngaysx'];

    $sql_insert = "Insert into ql_sanpham values('".$masp."','".$tensp."','".$kieudang."','".$soluong."','".$ngaysx."')";
    $result = $conn -> query($sql_insert);

    if($result){
        echo "Thêm dữ liệu thành công";
    }
    else{
        echo "loi them" .$sql_insert. "<br>" .$conn -> error;
    }
    $conn -> close();
    header('location:http://localhost/MINN Store/admin/ql_sanpham/viewsp.php');//điều hướng
    ?>
</body>
</html>