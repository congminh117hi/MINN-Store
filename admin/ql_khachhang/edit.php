<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa thông tin khách hàng</title>
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
    $makh=$_REQUEST['makh'];
    $sql_tim="SELECT * FROM ql_khachhang WHERE makh='".$makh."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $makh=$row['makh'];
        $tenkh=$row['tenkh'];
        $diachi=$row['diachi'];
        $email=$row['email'];
        $dienthoai=$row['dienthoai'];
        $ngaytao=$row['ngaytao'];
    }
    ?>
    <!-- //hiển thị dữ liệu lên giao diện ->form nhập thông tin khoa -> copy from nhập thông tin sang
    //hiển thị dữ liệu vào các value trong các điều khiển -->
    <form action="editkh.php" method="POST">
    <center>
    <h2> Sửa thông tin khách hàng </h2>
        <table>
            <tr>
                <td>
                    Mã khách hàng
                </td>
                <td><input type="text" name="txtmakh" readonly value="<?php echo $makh;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên khách hàng
                </td>
                <td><input type="text" name="txttenkh" value="<?php echo $tenkh;?>"></td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td><input type="text" name="txtdiachi" value="<?php echo $diachi;?>"></td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text" name="txtemail" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>
                    Số điện thoại
                </td>
                <td><input type="text" name="txtdienthoai" value="<?php echo $dienthoai;?>"></td>
            </tr>
            <tr>
                <td>
                    Ngày tạo
                </td>
                <td><input type="date" name="txtngaytao" value="<?php echo $ngaytao;?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>