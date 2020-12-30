<?php 
	 if(isset($_GET['trang'])){;
	$trang=$_GET['trang'];
	 }else{
		 $trang ='';
		 }
	if($trang=='' || $trang=='1'){
		$trang1=0;
	}else{
		$trang1=($trang*15)-15;
		}	 
 $sql_all="select * from sanpham limit $trang1,15" ;
 $query_all= mysqli_query($conn,$sql_all);
?>
		<!-- kết thúc phân trang -->
        
 <div id="menu1">
  <ul>
    <li><?php 
					$sql_nhacungcap="select * from nhacungcap limit 0,5";
					$query_ncc=mysqli_query($conn,$sql_nhacungcap);
					?>
                    <?php while($dong_sp=mysqli_fetch_array($query_ncc))
					{					
					?>
            		<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['MaNCC']?>">
					<?php echo $dong_sp['TenNCC']?>
                    </a></li>
            		<?php } ?></li>
  </ul>
</div>
 <div class="allsanpham">
 <h2 style="size:auto;background:#F3F3F3; padding-top:10px">TẤT CẢ SẢN PHẨM</h2>
      <?php
				while($dong_all=mysqli_fetch_array($query_all))
				{
				?>
            <ul><a href="index.php?xem=chitietmotsanpham&id=<?php echo $dong_all['MaSP']?>">                      
            <img src="Admin/modular/QuanlySP/hinhanh/<?php echo $dong_all['AnhSP'] ?>" width="130" height="170" />
            <p><strong><?php echo $dong_all['TenSP'] ?></strong></p>
            <p style="color:red;">Giá: <?php echo number_format($dong_all['Dongia']).''.'VNĐ'?></p>
            	</a>
            </ul>
              <?php
				}
			   ?>
      </div>
      <p style="clear:both;"></p>
      <div class="phantrang" align="center">
      <h3>
      Trang:
      <?php 
	  $sql_trang=mysqli_query($conn,"select * from sanpham ");
	  $count=mysqli_num_rows($sql_trang); //đếm có bao nhiêu sp trong table sanpham
	  $a=ceil($count/15); // phân chia 15 sp/trang
	  for($b=1;$b<=$a;$b++){
		  echo '<a href="?trang='.$b.'" style="text-decoration:none">'.'|'.' '.$b.' '.'|'.'</a>';
		  }
	  ?>
      </h3>
	  </div>
      <style>
	#menu1 ul {
	  background: #003;
	  list-style-type: none;
	  text-align: center;
	}
#menu1 li {
  color: #FFF;
  float: left;
  width: 120px;
  height: 22px;
  line-height: 20px;
}
#menu1 ul {
  background:#000;
  list-style-type: none;
  overflow: hidden;
  width: 100%;
}
#menu1 a {
  text-decoration: none;
  color: #fff;
  display: block;
}
#menu1 a:hover {
  background: #F1F1F1;
  color: #333;
}
  </style>