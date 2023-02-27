<?php
//Kết nối 
require_once('../connect.php');
//Hành động => đọc dữ liệu từ CSDL () => trình bày
$masp=$_POST['txtkey'];
$sql_select="select * from ql_sanpham WHERE masp='".$masp."'";
$result=$conn->query($sql_select);   //thực hiện
	//Đọc dữ liệu trong bảng -> vòng lặp -> while -> mảng
	//Trình bày dữ liệu trong table
	echo "<center>";
	    echo "<h2>DANH SÁCH SẢN PHẨM</h2>";
		
	    echo "<table border='1'>";
	        echo "<tr>";
					echo "<td>STT</td>";
					echo "<td>Mã sản phẩm</td>";
					echo "<td>Tên sản phẩm</td>";
					echo "<td>Kiểu dáng</td>";
					echo "<td>Số lượng</td>";
					echo "<td>Ngày sản xuất</td>";
					echo "<td colspan='2'><a href='sanpham.php'>Add</a></td>";
	        echo "</tr>";
	$i=0;
	while ($row=$result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['masp']."</td>";
			echo "<td>".$row['tensp']."</td>";
        	echo "<td>".$row['kieudang']."</td>";
        	echo "<td>".$row['soluong']."</td>";
        	echo "<td>".$row['ngaysx']."</td>";
			echo "<td>Edit</td>";
			echo "<td>Del</td>";
	}
		echo "</tr>";
		echo "</table>";
		echo "<a href='viewsp.php'>Back</a>";
	echo "</center>";
	//Đóng kết nối
    $conn->close();
?>