<div class="xulyphieudat" style="background-image:url(/webbanhang/images/nen_dk.jpg); background-repeat:no-repeat; height:1000px">
<?php
@session_start();
if(isset($_SESSION['product']) && isset($_SESSION['dangnhap'])){
	$MaKH=$_SESSION['dangnhap'];
	$sqlPD="insert into phieudat(MaKH) values('$MaKH')";
	$pm=mysqli_query($conn,$sqlPD);
	$sql="SELECT * FROM phieudat ORDER BY MaPD DESC LIMIT 1";
	$select=mysqli_query($conn,$sql);
	$MaPD12=mysqli_fetch_assoc($select);
	$MaPD=$MaPD12['MaPD'];
	for($i=0;$i<count($_SESSION['product']);$i++){
		$MaSP=$_SESSION['product'][$i]['id'];
		$sl=$_SESSION['product'][$i]['soluong'];
		$dongia=$_SESSION['product'][$i]['Dongia'];
		$sqlCTPD="INSERT INTO chitietphieudat(MaPD,MaSP,Soluong,Dongia,Tinhtrang) values('{$MaPD}','{$MaSP}','{$sl}','{$dongia}',0)";
		$a=mysqli_query($conn,$sqlCTPD);
	}
	if($a){
		echo '<div align="center">';
		echo '<br><h2><font color="#FF0000"> Chúc mừng. Bạn đã đặt hàng thành công tại Guân makert.</font></h2>';
		echo '<br><h2><font color="#FF0000"> Cảm ơn bạn đã tin dùng sản phẩm tại cửa hàng của chúng tôi.Hẹn gặp lại!</font></h2>';
		echo '<br><h2><font color="#FF0000"> Chúng tôi sẽ gọi điện lại cho quý khách để xác nhận đơn hàng.</font></h2>';
		echo '</div>';
	}
	else
		echo "LỖI";
}
?>
</div>
		