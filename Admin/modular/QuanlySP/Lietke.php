<div class="lietke">
<?php
 $sql="select * from sanpham order by MaSP desc";
 $run=mysqli_query($conn,$sql);
?>
<table width="1000px" border="1">
  	<tr style="background:#6FF" >
    <td width="50" height="40px">Mã SP</td>
    <td width="60" >Mã DM</td>
    <td width="60">Mã NCC</td>
    <td>Tên SP</td>
    <td width="70">Ảnh SP</td>
    <td width="60">Tổng SL</td>
    <td width="80">Khuyến mãi</td>
    <td align="center">Mô tả</td>
    <td>Đơn giá</td>
    <td width="150px" colspan="2"><strong>Quản lý</strong></td>
  </tr>
  <?php	
   while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td align="center"><?php echo $dong['MaSP']?></td>
    <td align="center"><?php echo $dong['MaDM']?></td>
    <td align="center"><?php echo $dong['MaNCC']?></td>
    <td><?php echo $dong['TenSP']?></td>
    <td><img src="modular/QuanlySP/hinhanh/<?php echo $dong['AnhSP']?>" width="70" height="70"/></td>
    <td align="center"><?php echo $dong['TongSL']?></td>
    <td><?php echo $dong['Khuyenmai']?></td>
    <td><?php echo $dong['Mota']?></td>
    <td><?php echo $dong['Dongia']?></td>
    <td width="60" align="center"><a href="index.php?Quanly=QuanlySP&action=Sua&id=<?php echo $dong['MaSP']?>">Sửa</a></td>
    <td width="60" align="center"><a href="modular/QuanlySP/Xuly.php?id=<?php echo $dong['MaSP']?>">Xoá</a></td>
  </tr> 
  <?php
 }
 ?>
 </table> 
 </div>
