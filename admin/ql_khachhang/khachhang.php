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
    <form action="addkh.php" method="POST" name="fkh">
    <center>
        <h2> Quản lí thông tin khách hàng </h2>
        <table >
            <tr >
                <td >
                    Mã khách hàng
                </td>
                <td><input type="text" name="txtmakh" required></td>
            </tr>
            <tr>
                <td>
                    Tên khách hàng
                </td>
                <td><input type="text" name="txttenkh" required></td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td><input type="text" name="txtdiachi" required></td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text"  name="txtemail" ></td>
            </tr>
            <tr>
                <td>
                    Số điện thoại
                </td>
                <td><input type="text" name="txtdienthoai" ></td>
            </tr>
            <tr>
                <td>
                    Ngày tạo
                </td>
                <td><input type="date" name="txtngaytao" ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Thêm"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>