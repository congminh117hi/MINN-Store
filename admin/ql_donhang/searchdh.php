<?php
//Kết nối 
require_once('../connect.php');
//Hành động => đọc dữ liệu từ CSDL () => trình bày
$madh=$_POST['txtkey'];
$sql_select="select * from ql_donhang WHERE madh='".$madh."'";
$result=$conn->query($sql_select);   //thực hiện
	//Đọc dữ liệu trong bảng -> vòng lặp -> while -> mảng
	//Trình bày dữ liệu trong table
	echo "<center>";
	    echo "<h2>DANH SÁCH ĐƠN HÀNG</h2>";
		
	    echo "<table border='1'>";
	        echo "<tr>";
					echo "<td>STT</td>";
					echo "<td>Mã đơn hàng</td>";
					echo "<td>Tên khách hàng</td>";
					echo "<td>Tình trạng đơn hàng</td>";
					echo "<td>Ngày đặt</td>";
					echo "<td>Ghi chú</td>";
					echo "<td colspan='2'><a href='donhang.php'>Add</a></td>";
	        echo "</tr>";
	$i=0;
	while ($row=$result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Madh']."</td>";
        echo "<td>".$row['tenkh']."</td>";
        echo "<td>".$row['tinhtrang']."</td>";
        echo "<td>".$row['ngaydat']."</td>";
        echo "<td>".$row['ghichu']."</td>";
		echo "<td>Edit</td>";
		echo "<td>Del</td>";
	}
		echo "</tr>";
		echo "</table>";
		echo "<a href='viewdh.php'>Back</a>";
	echo "</center>";
	//Đóng kết nối
    $conn->close();
?>