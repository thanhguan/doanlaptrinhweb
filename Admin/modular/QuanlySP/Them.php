<div class="them">
<form action="modular/QuanlySP/Xuly.php" method="post" enctype="multipart/form-data">
<table width="250" border="1">
  <tr>
    <td colspan="2"><p align="center">Thêm SP</p></td>
  </tr>
  <tr>
    <td width="70"><strong>Mã SP</strong></td>
   <td width="230"><input  type="text" name="MaSP" style="width:180px; height:30px"></td>
  </tr>
  <?php 
	$sql=" select * from danhmuc";
	$run=mysqli_query($conn,$sql);
  ?>
  <tr>
    <td width="70"><strong>Mã DM</strong></td>
    <td><select name="MaDM" style="width:100px; height:30px">
    <?php
	while($dong=mysqli_fetch_array($run)){
	?>
    <option value=" <?php echo $dong['MaDM'] ?>"><?php echo $dong['MaDM'] ?></option>
    <?php
	}
	?>
    </select>
    </td>
  </tr>
   <?php 
	$sql=" select * from nhacungcap";
	$run=mysqli_query($conn,$sql);
  ?>
  <tr>
    <td width="70"><strong>Mã NCC</strong></td>
    <td><select name="MaNCC" style="width:100px; height:30px">
    <?php
	while($dong=mysqli_fetch_array($run)){
	?>
    <option value=" <?php echo $dong['MaNCC'] ?>"><?php echo $dong['MaNCC'] ?></option>
    <?php
	}
	?>
    </select>
    </td>
  </tr>
   <tr>
    <td width="70"><strong>Tên SP</strong></td>
    <td><input type="text" name="TenSP" style="width:180px; height:30px"> </td>
  </tr>
  <tr>
    <td width="70"><strong>Ảnh SP</strong></td>
    <td><input type="file" name="AnhSP" style="width:180px; height:30px"></td>
  </tr>
   <tr>
    <td width="70"><strong>Tổng SL</strong></td>
    <td><input type="text" name="TongSL" style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td width="70"><strong>Khuyến mãi</strong></td>
    <td><input type="text" name="Khuyenmai" style="width:180px; height:30px"></td>
  </tr>
  <tr height="200px">
    <td width="70" height="200"><strong>Mô tả</strong></td>
	<td><textarea name="Mota" style="width:180px; height:200px"></textarea></td>
  </tr>
  <tr>
    <td width="70"><strong>Đơn giá</strong></td>
    <td><input type="text" name="Dongia" style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Them" id="Them" value="Thêm" style="width:150px; height:30px;  background:#F93">
    </div></td>
  </tr>
</table>
</form>
</div>
