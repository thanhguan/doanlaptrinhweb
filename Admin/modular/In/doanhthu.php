<h2 align="center" style="color:#F00; margin-top:10px">DOANH THU CỬA HÀNG</h2>
<div class="doanhthu" style=" height:1500px; width:1000px">
	
<?php 
for($month=1;$month<=12; $month++){
	  switch($month)
	  {		
	  case 1: case 3: case 5: case 7: case 8: case 10: case 12:
				  {
					  $day = 31;
					  break;
				  }	
	  case 4: case 6: case 9: case 11:
				  {
					  $day = 30;
					  break;
				  }
	  case 2:{
		  $day=28;
		  break;
		  }	
	  }
//for($j=1;$j<=$day;$j++){
$sql_="SELECT *FROM `chitiethoadon` INNER JOIN hoadon WHERE chitiethoadon.MaHD=hoadon.MaHD";
$query_=mysqli_query($conn, $sql_);
$dong_=mysqli_fetch_assoc($query_);
$MaHD=$dong_['MaHD'];
//
$a='2020-'.$month.'-'.'1'.' 00:00:00';
$b='2020-'.$month.'-'.$day.' 23:59:59';
$sql="SELECT SUM(Tongtien) as sum FROM `hoadon` INNER JOIN chitiethoadon ON hoadon.MaHD=chitiethoadon.MaHD 
WHERE Ngaylap BETWEEN '{$a}' AND '{$b}'";
$query=mysqli_query($conn,$sql);
$dong=mysqli_fetch_assoc($query);
$sum=$dong['sum'];
//
$sqli_ngay="select *from hoadon where Ngaylap between '2020-$month-1' and '2020-$month-31'";
$query_ngay= mysqli_query($conn,$sqli_ngay);

//
if($sum>0){
	//echo 'Tháng'.$month.'==>';
	//echo $dong['sum'].'<br>';
	echo '<table width="500" border="1 "bordercolor="#FF0000"style="margin-left:400px">';
 echo '<tr>
 <td width="121" height="30" align="center"><strong>Tháng</strong></td>
 <td width="125" align="center"><strong>Ngày</strong></td>
 <td width="125" align="center"><strong>Tổng</strong></td>
 </tr>';
 echo '<tr>
 <td align="center"><strong>'.$month.'</strong></td><td>';
while($dong_ngay=mysqli_fetch_assoc($query_ngay)){
	echo $dong_ngay['Ngaylap'].'<br>';
	}
 echo '</td><td>'.$sum.'</td>
 </tr>';
 echo '</table>'.'<br/>';
	
	 
	 	
}
while($dong_ngay=mysqli_fetch_assoc($query_ngay)){
		 	echo $dong_ngay['Ngaylap'];
		 } 
}
?>
</div>



