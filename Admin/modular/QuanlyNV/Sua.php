<div class="sua_nv">
<?php
 $sql="select * from nhanvien where MaNV=MaNV";
 $run=mysqli_query($conn,$sql);
 $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<form action="modular/QuanlyNV/Xuly.php?MaSP=<?php echo $dong['MaNV']?>" method="post" enctype="multipart/form-data">
<table width="250"  border="1">
  <tr>
    <td height="30" colspan="2"><p align="center"><strong>Sửa SP</strong></p></td>
  </tr>
   <tr>
    <td width="70">Mã NV</td>
    <td  ><input type="text" name="MaNV" value="<?php echo $dong['MaNV']?>" style="width:180px; height:30px"></td>
  </tr
  ><tr>
    <td >Tên NV</td>
    <td><input type="text" name="TenNV" value="<?php echo $dong['TenNV']?>" style="width:180px; height:30px"> </td>
  </tr>
  <tr>
    <td >Cmnd </td>
    <td><input type="text" name="Cmnd"  value="<?php echo $dong['Cmnd']?>" style="width:180px; height:30px"></td>
  </tr>
   <tr>
    <td >Sdt</td>
    <td><input type="text" name="Sdt"  value="<?php echo $dong['Sdt']?>" style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td >Bophan</td>
    <td><input type="text" name="Bophan"  value="<?php echo $dong['Bophan']?>" style="width:180px; height:30px"></td>
  </tr>
   <tr>
    <td >Mucluong</td>
    <td><input type="text" name="Mucluong"  value="<?php echo $dong['Mucluong']?>" style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td >Matkhau</td>
    <td><input type="text" name="Matkhau"  value="<?php echo $dong['Matkhau']?>" style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Sua" id="Sua" value="Sửa" style="width:100px; height:30px; background:#F90">
    </div></td>
  </tr>
</table>
</form>
</div>
