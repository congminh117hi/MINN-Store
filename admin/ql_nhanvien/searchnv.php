<?php
//Kết nối 
require_once('../connect.php');
//Hành động => đọc dữ liệu từ CSDL () => trình bày
$manv=$_POST['txtkey'];
$sql_select="select * from ql_nhanvien WHERE manv='".$manv."'";
$result=$conn->query($sql_select);   //thực hiện
	//Đọc dữ liệu trong bảng -> vòng lặp -> while -> mảng
	//Trình bày dữ liệu trong table
	echo "<center>";
	    echo "<h2>DANH SÁCH NHÂN VIÊN</h2>";
		
	    echo "<table border='1'>";
	        echo "<tr>";
					echo "<td>STT</td>";
					echo "<td>Mã nhân viên</td>";
					echo "<td>Tên nhân viên</td>";
					echo "<td>Địa chỉ</td>";
					echo "<td>Giới tính</td>";
					echo "<td>Số điện thoại</td>";
					echo "<td colspan='2'><a href='nhanvien.php'>Add</a></td>";
	        echo "</tr>";
	$i=0;
	while ($row=$result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Manv']."</td>";
        echo "<td>".$row['tennv']."</td>";
        echo "<td>".$row['diachi']."</td>";
        echo "<td>".$row['gioitinh']."</td>";
        echo "<td>".$row['dienthoai']."</td>";
		echo "<td>Edit</td>";
		echo "<td>Del</td>";
	}
		echo "</tr>";
		echo "</table>";
		echo "<a href='viewnv.php'>Back</a>";
	echo "</center>";
	//Đóng kết nối
    $conn->close();
?>