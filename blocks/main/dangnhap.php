<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['Email'];
		$matkhau=$_POST['Matkhau'];
		$sql_dangnhap="select * from khachhang where Email='$email' and Matkhau='$matkhau'";
		$run_dangnhap=mysqli_query($conn,$sql_dangnhap);
		$dangnhap=mysqli_fetch_array($run_dangnhap);
		$count_dangnhap=mysqli_num_rows($run_dangnhap);
		if($count_dangnhap==0){
			echo '<script>alert("sai tai khoan hay mat khau")</script>';
		}else{
			$_SESSION['dangnhap']=$dangnhap['MaKH'];
			header('location:index.php');		
		}
	}
?>
<div class="dangnhap" style="background-image:url(/webbanhang/images/nen_dn.jpg); background-repeat:no-repeat;width:100%; height:2000px"> 
<center>
<form action="" method="post" enctype="multipart/form-data">
<table bgcolor="" width="700" height="202">
  <tr>
    <td colspan="2" align="center"><h2>ĐĂNG NHẬP HỆ THỐNG</h2></td>
  </tr>
  <tr>
    <td width="154" height="39" ><strong>Email</strong></td>
    <td width="334" ><input type="text" name="Email" style="height:30px; width:500px"></td>
  </tr>
  <tr>
    <td width="154" height="39"><strong>Mật khẩu</strong></td>
    <td width="334"><input type="password" name="Matkhau"  style="height:30px; width:500px"></td>
  </tr>
  <tr>
    <td height="47" colspan="2"><div align="center"> 
    <a href="">
    <input type="submit" name="dangnhap" id="dangnhap" value="ĐĂNG NHẬP" style="height:30px">
    </a></div>
    </td>
  </tr>
</table>
</form>
</center>
</div>
