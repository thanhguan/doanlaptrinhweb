<?php
	@session_start();
	if(isset($_POST['dangky'])){
		$tenkh=$_POST['TenKH'];
		$matkhau=$_POST['Matkhau'];
		$email=$_POST['Email'];
		$diachi=$_POST['Diachi'];
		$sdt=$_POST['Sdt'];
		$sql_dangky="insert into khachhang (TenKH,Matkhau,Email,Diachi,Sdt) value('$tenkh','$matkhau','$email','$diachi','$sdt')";
		$run_query=mysqli_query($conn,$sql_dangky);
		$ount_dangky=mysqli_num_rows(mysqli_query);
		if($count_dangky==0){
			echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';
			header('location:index.php?xem=dangky');
		}else{
			header('location:index.php?xem=dangnhap');
		}
	}
?>

<div class="dangky" style="margin-top:10px;background-image:url(/webbanhang/images/nen_dk.jpg);background-repeat:no-repeat;width:100%; height:2000px">
<font size="+1">
<center>
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<table bgcolor="" width="700" height="300">
  <tr>
    <td colspan="2"><div align="center"><h3>ĐĂNG KÝ THÀNH VIÊN</h3></div></td>
  </tr>
  <tr>
    <td width="150px"><strong>Họ và tên</strong></td>
    <td ><input type="text" name="TenKH"  style="height:30px;width:500px"></td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><input type="text"name=" Email"  style="height:30px; width:500px"></td>
  <tr>
    <td ><strong>Mật khẩu</strong></td>
    <td><input type="password" name="Matkhau" style="height:30px;width:500px"></td>
  </tr>
  <tr>
    <td><strong>Địa chỉ</strong></td>
    <td><input type="text" name="Diachi"  style="height:30px;width:500px"></td>
  </tr>
  <tr>
   <td><strong>Số điện thoại</strong></td>
     <td><input type="text" name="Sdt" style="height:30px;width:500px"></td>
   </tr>
  <tr>
    <td height="23" colspan="2">
    <div align="center">
         <input  type="submit" name="dangky" value="ĐĂNG KÝ" style="height:30px; margin-left:150px">
     <a href="index.php"><input type="submit" name="huy" value="HUỶ" style="height:30px; width:50px; margin-right:150px"></a>
    </div></td>
    </tr>
</table>
</form>
</center>
</font>
</div>
