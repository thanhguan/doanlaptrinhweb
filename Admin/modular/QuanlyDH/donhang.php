<h2 align="center" style="color:#F00; margin-top:10px">QUẢN LÝ ĐƠN HÀNG</h2>
<div class="quanlydonhang" style="width:1200px; margin-left:30px; margin-top:20px"> 
<?php 
@session_start(); 
$sql= "select * from sanpham inner join chitiethoadon where sanpham.MaSP=chitiethoadon.MaSP order by MaHD desc";
$query=mysqli_query($conn,$sql);
?>
<form action="index.php?Quanly=donhang" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr style="height:40px; background:#6FF">
    <td>Mã HD</td>
    <td>Mã SP</td> 
    <td>Số lượng</td>
    <td>Đơn giá</td>
    <td>Tổng tiền</td>
    <td>Tình trạng </td>
    <td> In hoá đơn</td>
   </tr>
 <?php
 while($dong=mysqli_fetch_assoc($query)){
 $MaHD=$dong['MaHD'];
 $Soluong=$dong['Soluong'];
 $MaSP= $dong['MaSP'];
 $Dongia=$dong['Dongia'];
?>
<tr style="height:40px">
    <td><?php echo $MaHD ?></td>
    <td><?php echo $MaSP ?></td>
    <td><?php echo $Soluong?></td>
     <td><?php echo $Dongia?></td>
    <td><?php echo $dong['Tongtien']?></td>
    <td><?php 
  if($dong['Tinhtrang']==0){
	  echo  '<input type="submit" name='.$MaHD.' value="Chưa giao" style="height:30px; width:100px">';
	  }
   else 
	  echo  '<p> Đã giao</p>';
 	 ?></td>
     <td align="center"><a href="index.php?Quanly=Inhoadon&id=<?php echo $MaHD ?>">
     <img src="/webbanhang/images/inhoadon.png" style="width:40px; height:40px"></a></td>
</tr>
<?php
if(isset($_POST[$MaHD])){
	$sql_upHD="UPDATE `chitiethoadon` SET `Tinhtrang`=1 WHERE MaHD= $MaHD "; 
	$query_upHD=mysqli_query($conn,$sql_upHD); 
	header('location:index.php?Quanly=donhang');
	//
	$sql_slsp="select * from sanpham where MaSP='$MaSP'";
	$query_slsp=mysqli_query($conn,$sql_slsp);
	$dong_slsp=mysqli_fetch_assoc($query_slsp);
	$TongSL=$dong_slsp['TongSL'];
 	$Soluongmoi= $TongSL-$Soluong; 
	//
	$sql_upsp="update `sanpham` SET `TongSL`= $Soluongmoi WHERE MaSP=$MaSP ";
	$query_upsp=mysqli_query($conn,$sql_upsp);
}
}
?>
</table>
</form>
</div>