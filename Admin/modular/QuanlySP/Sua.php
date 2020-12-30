<div class="sua">
<?php
 $sql="select * from sanpham where MaSP='$_GET[id]'";
 $run=mysqli_query($conn,$sql);
 $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<form action="modular/QuanlySP/Xuly.php?id=<?php echo $dong['MaSP'] ?>" method="post" enctype="multipart/form-data">
<table width="250"  border="1">
  <tr>
    <td height="30" colspan="2"><p align="center">Sửa SP</p></td>
  </tr>
   <tr>
    <td width="70">Mã SP</td>
    <td  ><input type="text" name="MaSP" value="<?php echo $dong['MaSP']?>" style="width:180px; height:30px"></td>
  </tr>
   <?php 
	$sql=" select * from danhmuc";
	$run=mysqli_query($conn,$sql);
  ?>
  <tr>
    <td >Mã DM</td>
    <td><select name="MaDM"  style="width:180px; height:30px">
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
    <td >Mã NCC</td>
    <td><select name="MaNCC"  style="width:180px; height:30px">
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
    <td >Tên SP </td>
    <td><input type="varchar" name="TenSP"  value="<?php echo $dong['TenSP']?>"  style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td >Ảnh SP </td>
    <td><input type="file" name="AnhSP"  style="width:180px; height:30px">
    <img src="modular/QuanlySP/hinhanh/<?php echo $dong['AnhSP']?>" width="60" height="60" /> </td>
  </tr>
   <tr>
    <td align="center">Tổng SL</td>
    <td><input type="int" name="TongSL"  value="<?php echo $dong['Soluong']?>"  style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td >Khuyến mãi</td>
    <td><input type="varchar" name="Khuyenmai"  value="<?php echo $dong['Khuyenmai']?>"  style="width:180px; height:30px"></td>
  </tr>
  <tr height="200">
    <td height="200">Mô tả</td>
    <td height="200"><textarea name="Mota"  style="width:180px; height:200px"><?php echo $dong['Mota']?></textarea></td>
  </tr>
  <tr>
    <td>Đơn giá</td>
    <td><input type="int" name="Dongia"  value="<?php echo $dong['Dongia']?>"  style="width:180px; height:30px"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Sua" id="Sua" value="Sửa"  style="width:100px; height:30px; background:#F90">
    </div></td>
  </tr>
</table>
</form>
</div>
