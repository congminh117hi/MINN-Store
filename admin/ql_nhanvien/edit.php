<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa thông tin nhân viên</title>
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
    $manv=$_REQUEST['manv'];
    $sql_tim="SELECT * FROM ql_nhanvien WHERE manv='".$manv."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $manv=$row['manv'];
        $tennv=$row['tennv'];
        $diachi=$row['diachi'];
        $gioitinh=$row['gioitinh'];
        $dienthoai=$row['dienthoai'];
    }
    ?>
    <!-- //hiển thị dữ liệu lên giao diện ->form nhập thông tin khoa -> copy from nhập thông tin sang
    //hiển thị dữ liệu vào các value trong các điều khiển -->
    <form action="editnv.php" method="POST">
    <center>
    <h2> Sửa thông tin nhân viên </h2>
        <table>
            <tr>
                <td>
                    Mã nhân viên
                </td>
                <td><input type="text" name="txtmanv" readonly value="<?php echo $manv;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên nhân viên
                </td>
                <td><input type="text" name="txttennv" value="<?php echo $tennv;?>"></td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td><input type="text" name="txtdiachi" value="<?php echo $diachi;?>"></td>
            </tr>
            <tr>
                <td>
                    Giới tính
                </td>
                <td><input type="radio" name="txtgioitinh" value="nam" value="<?php echo $gioitinh;?>">Nam
                <input type="radio" name="txtgioitinh" value="nữ" > Nữ </td>
            </tr>
            <tr>
                <td>
                    Số điện thoại
                </td>
                <td><input type="text" name="txtdienthoai" value="<?php echo $dienthoai;?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>