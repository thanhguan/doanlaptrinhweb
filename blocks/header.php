<?php 
ob_start();
include('Admin/modular/config.php');
?>
<div class="header">
<ul>
<li style="padding-top:10px;"><font color="#0000FF" size="+5"><strong><i>WatchMarket</i></strong></font></li>
  <li>
    <form style="width:600px;" action="index.php"  method="post" enctype="multipart/form-data">
      <div class="timkiem" style="padding-top:20px">
        <input type="text" id="searchf" name="searchtext" style="height:30px;width:490px" border="1"/>
        <input type="submit" id="searchbtn" name="search" style="height:30px;width:60px" value="Tìm kiếm" placeholder="Search..."/>
      </div>
 </form>
</li> 
<li><a href="index.php?xem=giohang"><img src="/webbanhang/images/icon_gh.png" style="width:50px; height:50px"></a></li>
</ul>
</div>