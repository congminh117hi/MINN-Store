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
    $madh=$_REQUEST['madh'];
    $sql_tim="SELECT * FROM ql_donhang WHERE madh='".$madh."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $madh=$row['madh'];
        $tenkh=$row['tenkh'];
        $tinhtrang=$row['tinhtrang'];
        $ngaydat=$row['ngaydat'];
        $ghichu=$row['ghichu'];
    }
    ?>
    <!-- //hiển thị dữ liệu lên giao diện ->form nhập thông tin khoa -> copy from nhập thông tin sang
    //hiển thị dữ liệu vào các value trong các điều khiển -->
    <form action="editdh.php" method="POST">
    <center>
    <h2> Sửa thông tin đơn hàng </h2>
        <table>
            <tr>
                <td>
                    Mã đơn hàng
                </td>
                <td><input type="text" name="txtmadh" readonly value="<?php echo $madh;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên khách hàng
                </td>
                <td><input type="text" name="txttenkh" value="<?php echo $tenkh;?>"></td>
            </tr>
            <tr>
                <td>
                    Tình trạng đơn hàng
                </td>
                <td><input type="radio" value="dang xu li" name="txttinhtrang" required>Đang xử lí
                <input type="radio" value="da hoan thanh" name="txttinhtrang" required>Đã hoàn thành</td>
            </tr>
            <tr>
                <td>
                    Ngày đặt
                </td>
                <td><input type="date" name="txtngaydat" value="<?php echo $ngaydat;?>"></td>
            </tr>
            <tr>
                <td>
                    Ghi chú
                </td>
                <td><input type="text" name="txtghichu" value="<?php echo $ghichu;?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>