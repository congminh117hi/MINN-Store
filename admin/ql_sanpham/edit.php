<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa thông tin sản phẩm</title>
    <style>
        body{
            background-color: #696969;
        }
        h2{
            font-size: 40px;
        }
        td{
           padding: 40px 0px 0px 80px;
           font-size:30px;
        }
        input{   
           padding: 15px 0px 0px 10px;
           font-size:30px;
        }
    </style>
</head>
<body>
    
    <?php
    require_once('../connect.php');
    $masp=$_REQUEST['masp'];
    $sql_tim="SELECT * FROM ql_sanpham WHERE masp='".$masp."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $masp=$row['masp'];
        $tensp=$row['tensp'];
        $kieudang=$row['kieudang'];
        $soluong=$row['soluong'];
        $ngaysx=$row['ngaysx'];
    }
    ?>
    <!-- //hiển thị dữ liệu lên giao diện ->form nhập thông tin sanpham-> copy from nhập thông tin sang
    //hiển thị dữ liệu vào các value trong các điều khiển -->
    <form action="editsp.php" method="POST">
    <center>
    <h2> Sửa thông tin sản phẩm </h2>
        <table>
        <tr>
                <td>
                    Mã sản phẩm
                </td>
                <td><input type="text" name="txtmasp" readonly value="<?php echo $masp;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên sản phẩm
                </td>
                <td><input type="text" name="txttensp"  value="<?php echo $tensp;?>"></td>
            </tr>
            <tr>
                <td>
                    Kiểu dáng
                </td>
                <td><input type="text" name="txtkieudang" value="<?php echo $kieudang;?>"></td>
            </tr>
            <tr>
                <td>
                    Số lượng
                </td>
                <td><input type="text" name="txtsoluong" value="<?php echo $soluong;?>"></td>
            </tr>
            <tr>
                <td>
                    Ngày sản xuất
                </td>
                <td><input type="date" name="txtngaysx" value="<?php echo $ngaysx;?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>