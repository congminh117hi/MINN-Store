<?php
//Kết nối 
require_once('../connect.php');
//Hành động => đọc dữ liệu từ CSDL () => trình bày
$makh=$_POST['txtkey'];
$sql_select="select * from ql_khachhang WHERE makh='".$makh."'";
$result=$conn->query($sql_select);   //thực hiện
	//Đọc dữ liệu trong bảng -> vòng lặp -> while -> mảng
	//Trình bày dữ liệu trong table
	echo "<center>";
	    echo "<h2>DANH SÁCH KHÁCH HÀNG</h2>";
		
	    echo "<table border='1'>";
	        echo "<tr>";
					echo "<td>STT</td>";
					echo "<td>Mã khách hàng</td>";
					echo "<td>Tên khách hàng</td>";
					echo "<td>Địa chỉ</td>";
					echo "<td>Email</td>";
					echo "<td>Số điện thoại</td>";
                    echo "<td>Ngày tạo</td>";
					echo "<td colspan='2'><a href='khachhang.php'>Add</a></td>";
	        echo "</tr>";
	$i=0;
	while ($row=$result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Makh']."</td>";
        echo "<td>".$row['tenkh']."</td>";
        echo "<td>".$row['diachi']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['dienthoai']."</td>";
        echo "<td>".$row['ngaytao']."</td>";
		echo "<td>Edit</td>";
		echo "<td>Del</td>";
	}
		echo "</tr>";
		echo "</table>";
		echo "<a href='viewkh.php'>Back</a>";
	echo "</center>";
	//Đóng kết nối
    $conn->close();
?>