<?php
	@session_start();
	$sql_ctmsp="select * from sanpham where MaSP='$_GET[id]'";
	$query_ctmsp=mysqli_query($conn,$sql_ctmsp);
	$dong_ctmsp=mysqli_fetch_array($query_ctmsp);	
?>
<form  action="update_cart.php?id=<?php echo $dong_ctmsp['MaSP'] ?>" method="post" enctype="multipart/form-data">
<div class="chitietsanpham">
 	<h2 style="size:auto;background:#F3F3F3; padding-top:10px"><?php echo $dong_ctmsp['TenSP'] ?></h2>
 	<div class="hinhanh">
 	<img src="Admin/modular/QuanlySP/hinhanh/<?php echo $dong_ctmsp['AnhSP']?>" width="300px" height="500px"/>
 	</div>
 	<div class="thongso">
 	<h2 style="height:50px"><font size="+3" color="#FF0000"><p style="margin-top:10px">Giá:<?php echo $dong_ctmsp['Dongia']?><p></font></h2>
 	<div class="thongsokythuat" style="height:200px; border:1px solid #CCC" >
    <p style="background:#0FF" align="center"><font size="+2">Thông số kỹ thuật:</font></p>
 	<font size="+1"><?php echo $dong_ctmsp['Mota']?></font>
    </div>
    <h3 style="height:60px">Nhập số lượng:<input style="width:100px;height:30px; margin-top:10px;"type="text" name="soluong" value="1" size="+2"></h3>
    <p align="center"><input style="width:200px;height:50px; background:#F93" type="submit" name="Mua" value="MUA NGAY"></p>
</div>
</form>
