
<?php 
 include('modular/config.php');
 session_start();
 if(isset($_POST['Login'])){
	 $username=$_POST['TenNV'];
	 $password=$_POST['Matkhau'];
	 $sqli=" select * from nhanvien where TenNV='$username' and Matkhau='$password' limit 1";
	 $query=mysqli_query($conn,$sqli);
	 $nums=mysqli_num_rows($query);//lấy ra số dòng.
	 if($nums>0){
		$_SESSION['dangnhap']=$username;
		 header('location:index.php');
		 }
		 else{
		 echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.Vui lòng nhập lại.");</script>'; 
		 header('location:login.php');
		 }
	 }
?>
<form action="" method="post">
<center>
  <table width="300" height="160" border="1">
  <tr>
    <td width="100" height="31"><table width="300" height="160" border="1">
      <tr>
        <td colspan="2"><div align="center">Đăng nhập</div></td>
      </tr>
      <tr>
        <td width="100" height="31">Username</td>
        <td width="100"><input type="text" name="TenNV" size="30"></td>
      </tr>
      <tr>
        <td width="100" height="31"> Password</td>
        <td width="100"><input type="password" name="Matkhau" size="30"></td>
      </tr>
      <tr>
        <td height="38" colspan="2"><div align="center" >
          <input type="Submit" name="Login" id="Login" value="Login">
        </div></td>
      </tr>
    </table></td>
  </tr>
  </table>
</center>
</form>
