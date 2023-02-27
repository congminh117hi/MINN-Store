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
    <form action="addsp.php" method="POST" name="fsp">
    <center>
        <h2> Quản lí thông tin sản phẩm </h2>
        <table >
            <tr >
                <td >
                    Mã sản phẩm
                </td>
                <td><input type="text" name="txtmasp" required></td>
            </tr>
            <tr>
                <td>
                    Tên sản phẩm
                </td>
                <td><input type="text" name="txttensp" required></td>
            </tr>
            <tr>
                <td>
                    Kiểu dáng
                </td>
                <td><input type="text" name="txtkieudang" ></td>
            </tr>
            <tr>
                <td>
                    Số lượng
                </td>
                <td><input type="text" name="txtsoluong" ></td>
            </tr>
            <tr>
                <td>
                    Ngày sản xuất
                </td>
                <td><input type="date" name="txtngaysx" ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Thêm"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>