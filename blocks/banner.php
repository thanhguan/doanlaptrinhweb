<div class="banner">
<div class="slide">
	 <div class="slideshow-container">
  <div class="mySlides fade">
    <img src="/webbanhang/images/ban1.jpg" style="width:900px" height="360px">
  </div>
  <div class="mySlides fade">
    <img src="/webbanhang/images/ban20.png" style="width:900px" height="360px">
  </div>
  <div class="mySlides fade">
    <img src="/webbanhang/images/ban5.png" style="width:900px" height="360px">
  </div>
  <div class="mySlides fade">
    <img src="/webbanhang/images/ban40.png" style="width:900px" height="360px">
  </div>
  <div class="mySlides fade">
    <img src="/webbanhang/images/ban5.jpg" style="width:900px" height="360px">
  </div>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>  
  <span class="dot" onclick="currentSlide(4)"></span>  
</div>
<script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 5000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
</div>
<div class="tintuc">
<h2 style="background:#6FF; width:150px;"> Tin công nghệ</h2>
<div class="tin1">
<img src="/webbanhang/images/rolexx.jpg"/>
<a href=""><p><strong><font size="+1">Rolex Ra Sản Phẩm Mới <br/>đại gia có thể mua,...</font></strong></p></a>
</div>
<div class="tin2">
<img src="/webbanhang/images/m1.jpg"/>
<a href=""><p><strong><font size="+0.5">Smart Watch Apple<br/>cảm ứng, chống va đập, chống nước ,...</font></strong></p></a>
</div>
<div class="tin3" style="width:380px; height:150px"><a><img src="/webbanhang/images/sale.jpg" width="380px" height="150px" style="margin-left:15px"/></a></div>
</div>
</div>