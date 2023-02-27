<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form action="adddh.php" method="POST" name="fdh">
    <center>
        <h2> Quản lí thông tin đơn hàng </h2>
        <table >
            <tr >
                <td >
                    Mã đơn hàng
                </td>
                <td><input type="text" name="txtmadh" required></td>
            </tr>
            <tr>
                <td>
                    Tên khách hàng
                </td>
                <td><input type="text" name="txttenkh" required></td>
            </tr>
            <tr>
                <td>
                    Tình trạng đơn hàng
                </td>
                <td><input type="radio" value="dang xu li" name="txttinhtrang" >Đang xử lí
                <input type="radio" value="da hoan thanh" name="txttinhtrang" >Đã hoàn thành</td>
            </tr>
            <tr>
                <td>
                    Ngày đặt
                </td>
                <td><input type="date" name="txtngaydat" > </td>
            </tr>
            <tr>
                <td>
                    Ghi chú
                </td>
                <td><input type="text" name="txtghichu" ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Thêm"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>