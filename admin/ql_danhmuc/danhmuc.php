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
    <form action="addmuc.php" method="POST" name="fmuc">
    <center>
        <h2> Quản lí thông tin danh mục </h2>
        <table >
            <tr >
                <td >
                    Mã danh mục
                </td>
                <td><input type="text" name="txtmamuc" required></td>
            </tr>
            <tr>
                <td>
                    Tên danh mục
                </td>
                <td><input type="text" name="txttenmuc" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Thêm"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>