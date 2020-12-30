<?php
 $sql="select * from chitiethoadon order by MaHD ";
 $run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
  <tr>
    <td>Mã HD</td>
    <td>Mã KH</td>
    <td>Mã NV</td>
    <td>MaSP</td>
    <td>Số lượng</td>
    <td>Tổng tiền</td>
    <td>Ngày lập</td>
    <td>Tình trạng</td>
  </tr>
  <?php	
   while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $dong['MaHD']?></td>
    <td><?php echo $dong['MaKH']?></td>
    <td><?php echo $dong['MaNV']?></td>
    <td><?php echo $dong['MaSP']?></td>
    <td><?php echo $dong['Soluong']?></td>
    <td><?php echo $dong['Ngaylap']?></td>
    <td><?php echo $dong['Tongtien']?></td>
    <td><?php echo $dong['Tinhtrang']?></td>
  </tr> 
  <?php
 }
 ?>
 </table> 
