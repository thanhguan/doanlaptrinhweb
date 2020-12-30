<?php 
ob_start();
include('Admin/modular/config.php');
?>
 <div class="menu">
    	<ul> 
            <li><font color="#FF0033" size="+3"><strong><i><a href="index.php">Watch<em>MarketGuân</em></a></i></strong></font></li>
            
            <li> 
            <form  method="post" enctype="multipart/form-data">
            <input type="text" id="searchf" name="searchtext" style="height:25px;width:200px; margin-top:7px;" border="1"/>
            <input type="submit" id="searchbtn" name="search" style="height:25px;width:60px" value="Tìm kiếm" placeholder="Search..."/>
            </form>
            
            </li> 
            <li style="margin-left: 40px"><img src="/webbanhang/images/icon_dienthoai.png" width="25px" height="25px"/><a href="index.php?xem=tatcasanpham">ĐỒNG HỒ</a>
            	
            </li>
          	<li><img src="/webbanhang/images/icon_dangnhap.png" width="25px" height="25px"/><a href="index.php?xem=dangnhap">ĐĂNG NHẬP</a></li>
          	<li><img src="/webbanhang/images/icon_caybut.png" width="25px" height="25px"/><a href="index.php?xem=dangky">ĐĂNG KÝ</a></li> 
           <li><a href="index.php?xem=giohang"><img src="/webbanhang/images/91.png" style="width:35px; height:35px; padding-top:1px; float:right; margin-right:120px"></a></li>
		 </ul>      
</div>  