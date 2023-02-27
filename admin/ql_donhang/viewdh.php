<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> thông tin đơn hàng</title>
</head>
<style>
        body{
            background-color: #ffa07a;
        }
        h1{
            font-size: 22px;
            margin-left: 100rem;
        }
        h2{
            font-size: 40px;
        }
        tr :hover{
            color:#f0fff0;
        }
        td{
           padding: 40px 20px;
           font-size:30px;
           text-align: center;
        }
        input{   
           padding: 15px 0px 0px 10px;
           font-size:30px;
        }
        table{
            margin-top: 40px;
        }
    </style>
<body>
     <?php
    //kết nối
    require_once('../connect.php');
    ?>
    <center>
    <h1><a href="http://localhost/MINN Store/admin">Quay lại trang chủ</a></h1>
    <h2>Danh sách đơn hàng</h2>
    <form action='' method='POST' >
        <input type='text' name='txtkey'> <input type='submit' value='Tìm kiếm'>
        <input type="button" value="Refresh" onclick="window.location.href='viewdh.php'">
    </form>
<?php
    if(isset($_POST['txtkey'])&& !empty($_POST['txtkey']))
    {
        $madh=$_POST['txtkey'];
        $sql_select="SELECT * FROM ql_donhang where madh='".$madh."'";
    }
    else{
        $sql_select="SELECT * FROM ql_donhang";
    }
    $result=$conn->query($sql_select); //thực hiện
?>
<?php
//để đọc dữ liệu =>vòng lặp=>while=>mảng
//trình bày dữ liệu trong Table
    echo "<table border='1'>";
    echo "<tr>";
        echo "<td>STT</td>";
        echo "<td>Mã đơn hàng</td>";
        echo "<td>Tên khách hàng</td>";
        echo "<td>Tình trạng</td>";
        echo "<td>Ngày đặt</td>";
        echo "<td>Ghi chú</td>";
        echo "<td colspan='2'><a href='donhang.php'>Add</a></td>";
    echo "</tr>";
        $i=0;
        while($row=$result->fetch_assoc()){
            $i=$i+1; $madh=$row['madh'];
        echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$row['madh']."</td>";
            echo "<td>".$row['tenkh']."</td>";
            echo "<td>".$row['tinhtrang']."</td>";
            echo "<td>".$row['ngaydat']."</td>";
            echo "<td>".$row['ghichu']."</td>";
            echo "<td><a href='edit.php?madh=$madh'>Edit</td>";
            echo "<td><a href='delete.php?madh=$madh'>Del</td>";
        }
    echo "</table>";
    echo "</center>";
   
//đóng kết nối
$conn->close();
?>
</center>
</body>
</html>