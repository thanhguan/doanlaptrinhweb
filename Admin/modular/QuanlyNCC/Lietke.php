<div class="lietke">
<?php
 $sql="select * from nhacungcap order by MaNCC desc";
 $run=mysqli_query($conn,$sql);
?>
<table width="1000" border="1">
  <tr style="height:30px">
    <td align="center"><strong>Mã NCC</strong></td>
    <td align="center"><strong>Tên NCC</strong></td>
    <td align="center"colspan="2"><strong>Quản lý</strong></td>
  </tr>
  <?php	
   while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr style="height:30px">
    <td align="center"><?php echo $dong['MaNCC']?></td>
    <td align="center"><?php echo $dong['TenNCC']?></td>
    <td align="center"><a href="index.php?Quanly=QuanlyNCC&action=Sua&id=<?php echo $dong['MaNCC']?>">Sửa</a></td>
    <td align="center"><a href="modular/QuanlyNCC/Xuly.php?id=<?php echo $dong['MaNCC']?>">Xoá</a></td>
  </tr> 
  <?php
 }
 ?>
 </table>
 </div> 
