<div class="sua">
<?php
 $sql="select * from nhacungcap where MaNCC='$_GET[id]'";
 $run=mysqli_query($conn,$sql);
 $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<form action="modular/QuanlyNCC/Xuly.php?id=<?php echo $dong['MaNCC'] ?>"
 method="post" enctype="multipart/form-data">
<table width="250"  border="1">
  <tr>
    <td height="30" colspan="2"><p align="center"><strong>Sửa NCC</strong></p></td>
  </tr>   
 <tr>
    <td width="70">Mã NCC</td>
    <td><input type="text" name="MaNCC" value="<?php echo $dong['MaNCC']?>"  style="width:180px; height:30px"> </td>
  </tr>
  <tr>
    <td >Tên NCC </td>
    <td><input type="text" name="TenNCC"  value="<?php echo $dong['TenNCC']?>"  style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Sua" id="Sua" value="Sửa" style="width:100px; height:30px; background:#F90"></div>
    </td>
  </tr>
</table>
</form>
</div>
