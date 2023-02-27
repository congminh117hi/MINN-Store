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
    <form action="addnv.php" method="POST" name="fnv">
    <center>
        <h2> Quản lí thông tin nhân viên </h2>
        <table >
            <tr >
                <td >
                    Mã nhân viên
                </td>
                <td><input type="text" name="txtmanv" required></td>
            </tr>
            <tr>
                <td>
                    Tên nhân viên
                </td>
                <td><input type="text" name="txttennv" required></td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td><input type="text" name="txtdiachi" required></td>
            </tr>
            <tr>
                <td>
                    Giới tính
                </td>
                <td><input type="radio" name="txtgioitinh" value="nam" > Nam
                <input type="radio" name="txtgioitinh" value= "nữ" > Nữ</td>
            </tr>
            <tr>
                <td>
                    Số điện thoại
                </td>
                <td><input type="text" name="txtdienthoai" ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Thêm"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>