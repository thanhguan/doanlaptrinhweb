<div class="lietke">
<?php
 $sql="select * from danhmuc order by MaDM desc";
 $run=mysqli_query($conn,$sql);
?>
<table width="1000" border="1">
  <tr style="height:30px">
    <td align="center"><strong>Mã DM</strong></td>
    <td align="center"><strong>Tên DM</strong></td>
    <td  align="center" colspan="2"><strong>Quản lý</strong></td>
  </tr>
  <?php	
   while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr style="height:30px">
    <td align="center"><?php echo $dong['MaDM']?></td>
    <td><?php echo $dong['TenDM']?></td>
    <td align="center"><a href="index.php?Quanly=QuanlyDM&action=Sua&id=<?php echo $dong['MaDM']?>">Sửa</a></td>
    <td align="center"><a href="modular/QuanlyDM/Xuly.php?id=<?php echo $dong['MaDM']?>">Xoá</a></td>
  </tr> 
  <?php
 }
 ?>
 </table>
 </div> 
