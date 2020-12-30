
   <p><img src="/webbanhang/images/60.png" style="width:1350px; height:90px" /></p>
   <div class="hangbanchay"> 
  	<center><h2 style="width:300px;background:#F3F3F3; border-radius:0px 0px 7px 7px; text-align:center">HÀNG BÁN CHẠY</h2></center>
    <?php
	$sql_banchay=mysqli_query($conn,"select * from sanpham order by RAND() limit 5");
	while($dong_banchay=mysqli_fetch_array($sql_banchay)){
	?>
   <ul>
   <a href="index.php?xem=chitietmotsanpham&&id=<?php echo $dong_banchay['MaSP'] ?>">
     <img class="hinh" src="Admin/modular/QuanlySP/hinhanh/<?php echo $dong_banchay['AnhSP'] ?>" width="130" height="170" />
     <h3><?php echo $dong_banchay['TenSP'] ?></h3>
     <h3 style="color:red;" > Giá:<?php echo number_format($dong_banchay['Dongia']).''.'VNĐ'?></h3>
    </a></ul>
    <?php
	}
	?>
    </div>
     <!-- kết thúc hàng bán chạy-->  
    <div class="dienthoai"> 
  		 <h2 style="background:#F3F3F3; padding-top:10px; width:1300px; padding-left:8px;">  ĐỒNG HỒ</h2>
    <?php
	$sql_banchay=mysqli_query($conn,"select * from sanpham limit 10");
	while($dong_banchay=mysqli_fetch_array($sql_banchay)){
	?>
   <ul><a href="index.php?xem=chitietmotsanpham&&id=<?php echo $dong_banchay['MaSP'] ?>">
     <img src="Admin/modular/QuanlySP/hinhanh/<?php echo $dong_banchay['AnhSP'] ?>" width="130" height="170" />
     <h3><?php echo $dong_banchay['TenSP'] ?></h3>
     <h3 style="color:red;" > Giá:<?php echo number_format($dong_banchay['Dongia']).''.'VNĐ'?></h3>
     </a></ul>
    <?php
	}
	?>
    </div>
     
            