<?php
//Kết nối 
require_once('../connect.php');
//Hành động => đọc dữ liệu từ CSDL () => trình bày
$mamuc=$_POST['txtkey'];
$sql_select="select * from ql_danhmuc WHERE mamuc='".$mamuc."'";
$result=$conn->query($sql_select);   //thực hiện
	//Đọc dữ liệu trong bảng -> vòng lặp -> while -> mảng
	//Trình bày dữ liệu trong table
	echo "<center>";
	    echo "<h2>DANH SÁCH DANH MỤC</h2>";
		
	    echo "<table border='1'>";
	        echo "<tr>";
					echo "<td>STT</td>";
					echo "<td>Mã danh mục</td>";
					echo "<td>Tên danh mục</td>";
					echo "<td colspan='2'><a href='danhmuc.php'>Add</a></td>";
	        echo "</tr>";
	$i=0;
	while ($row=$result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Mamuc']."</td>";
        echo "<td>".$row['tenmuc']."</td>";
		echo "<td>Edit</td>";
		echo "<td>Del</td>";
	}
		echo "</tr>";
		echo "</table>";
		echo "<a href='viewmuc.php'>Back</a>";
	echo "</center>";
	//Đóng kết nối
    $conn->close();
?>