<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa thông tin danh mục</title>
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
    $mamuc=$_REQUEST['mamuc'];
    $sql_tim="SELECT * FROM ql_danhmuc WHERE mamuc='".$mamuc."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $mamuc=$row['mamuc'];
        $tenmuc=$row['tenmuc'];
    }
    ?>
    <!-- //hiển thị dữ liệu lên giao diện ->form nhập thông tin mucoa -> copy from nhập thông tin sang
    //hiển thị dữ liệu vào các value trong các điều khiển -->
    <form action="editmuc.php" method="POST">
    <center>
    <h2> Sửa thông tin danh mục </h2>
        <table>
            <tr>
                <td>
                    Mã danh mục
                </td>
                <td><input type="text" name="txtmamuc" readonly value="<?php echo $mamuc;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên danh mục
                </td>
                <td><input type="text" name="txttenmuc" value="<?php echo $tenmuc;?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
        </table>
        
    </center>
    </form>
</body>
</html>