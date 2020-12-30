<?php 
 $sql="select * from khachhang inner join hoadon where khachhang.MaKH= hoadon.MaKH and MaHD=$_GET[id]";
 $query=mysqli_query($conn,$sql);
 while($dong=mysqli_fetch_array($query)){
	 $MaHD=$dong['MaHD'];
	 $TenKH=$dong['TenKH'];
	 $MaNV=$dong['MaNV'];
	 $MaNL=$dong['Ngaylap'];
	 $Diachi=$dong['Diachi'];
 }
?>

<div class="hoadon" style=" width:630px; margin-top:30px;margin-left:200px;border:1px solid #666;  background:#FFF">
<table width="630" style="margin-left:10px">
  <tr>
    <td colspan="3">Guânshop Information Technology</td>
  </tr>
  <tr>
    <td colspan="3">Mẹ Suốt-Liên Chiểu-Đà Nẵng</td>
  </tr>
  <tr>
    <td colspan="3">Tel: 0869804509</td>
  </tr>
  <tr style="height:30px">
    <td colspan="3"><strong><p align="center"><font size="+2">HOÁ ĐƠN BÁN HÀNG</font></p></p></strong></td>
  </tr>
  <tr style="height:30px">
    <td width="105">Mã HD:<?php echo $MaHD ?></td>
    <td width="226">Nhân viên:<?php echo $MaNV ?></td>
    <td width="267">Ngày lập: <?php echo $MaNL?></td>
  </tr>
  <tr style="height:30px">
    <td colspan="2">Khách hàng:<strong><?php echo $TenKH ?></strong></td>
    <td>Địa chỉ: <?php echo $Diachi ?></td>
  </tr>
  <tr>
  <?php 
  $sql_="select * from sanpham inner join chitiethoadon where sanpham.MaSP=chitiethoadon.MaSP and MaHD= $_GET[id]";
  $query_=mysqli_query($conn,$sql_);
  while($dong_=mysqli_fetch_array($query_)){
	  $TenSP=$dong_['TenSP'];
	  $Soluong=$dong_['Soluong'];
	  $Dongia=$dong_['Dongia'];
	  $Tongtien=$dong_['Tongtien'];
  }
  ?>
    <td colspan="3"><table width="610" border="1" align="center">
  		<tr style="height:30px">
    		<td>Tên SP</td>
    		<td>Số lương</td>
            <td>Đơn giá</td>	
  		</tr>
  		<tr style="height:30px">
    		<td><?php echo $TenSP ?></td>
   		 	<td align="center"><?php echo $Soluong ?></td>
            <td><?php echo $Dongia ?></td>
        </tr>
          		<tr style="height:30px">
  		  <td colspan="3"><strong>Tổng:<?php echo $Tongtien ?></strong></td>
  		  </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td colspan="3"><em><p align="center">Cảm ơn quý khách.Hẹn gặp lại!</p></em></td>
  </tr>
</table>
</div>
