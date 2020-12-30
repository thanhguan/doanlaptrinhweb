 <?php
	include('../config.php');
	$MaHD=$_POST['MaHD'];
	$MaKH=$_POST['MaKH'];
	$MaNV=$_POST['MaNV'];
	$MaSP=$_POST['MaSP'];
	$Soluong=$_POST['Soluong'];
	$Tongtien=$_POST['Tongtien'];
	$Ngaylap=$_POST['Ngaylap'];
	$Tinhtrang=$_POST['Tinhtrang'];
	if(isset($_POST['Them']))
	{
		//thêm 
		$sqlHD="insert into hoadon(MaKH,MaNV) values('{$MaKH}','{$MaNV}')";
		$pm=mysqli_query($conn,$sqlHD);
		$sql="SELECT * FROM `hoadon` ORDER BY MaHD DESC LIMIT 1";
		$select=mysqli_query($conn,$sql);
		$MaHD12=mysqli_fetch_assoc($select);
		$MaHD=$MaHD12['MaHD'];
		$sqlCTHD="INSERT INTO chitiethoadon(MaHD,MaSP,Soluong,Tongtien) values('{$MaHD}','{$MaSP}','{$Soluong}','{$Tongtien}')";
		$a=mysqli_query($conn,$sqlCTHD);
		
	}

	
?>


