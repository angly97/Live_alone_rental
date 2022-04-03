
<!DOCTYPE html>
<html lang="ko" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>나, 혼자사는 대여</title>
      <script src="Main.js" type="text/javascript" charset="utf-8"></script>
          <link rel= "stylesheet" type="text/css" href = "Mainstyle.css"/>
   </head>

    <body>
          <!--맨위로 버튼을 위한 주소 설정-->
          <a name = top>

          <button class="logo" style="cursor:pointer"><a href="Main.php"><img class="logoimg" src="img/logo.png"></a></button>
          <button class="mypage" style="cursor:pointer"><a href="login.php">로그인</a></button>
          <button class="brand" style="cursor:pointer"><a href="Brand.php">브랜드</a></button>
          <button class="customer" style="cursor:pointer"><a href="customercenter.php">고객센터</a></button>

      <!--검색-->
      <form action="search.php" method="post">
          <div class="search" align=center>
                 <input class = "src" type="text" name="search_word" placeholder="검색하기">
                  <input type="submit" value="submit" class="srcbtn"><img class="findimg" src="img/find.png">
             </div>
      </form>
   </header>

   <nav>
         <ul>
        <li ><a href="AirPurifier_list.php">공기 청정기</a></li>
        <li ><a href="Humidifier_list.php">가습기</a></li>
        <li ><a href="WaterPurifier_list.php">정수기</a></li>
        <li><a href="Event.php">이벤트/쿠폰</a></li>
        <li ><a href="list.php">상품 후기</a></li>
        </ul>
   </nav>

       <div class="content">

          <div class="slideshow-container">

         <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
               <img src="img/ad01.jpg" style="width:100%">
          </div>

            <div class="mySlides fade">
               <img src="img/ad02.png" style="width:100%">
           </div>

           <div class="mySlides fade">
                <img src="img/ad03.jpg" style="width:100%">
           </div>

         <!-- Next and previous buttons -->
           <a class="prev" onclick="moveSlides(-1)">&#10094;</a>
            <a class="next" onclick="moveSlides(1)">&#10095;</a>
       </div>
   <br/>

    <!-- The dots/circles -->
       <div style="text-align:center">
           <span class="dot" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
       </div>

       <hr class = "main_hr" style="border:1px color= silver;" width="100%" >

       <div class="BestProduct">인기제품<br>Best 3</div>
       <div class="BestProduct_img">
         <img src="img/BestProduct01.jpg" class=BP01>
         <img src="img/BestProduct02.jpg" class=BP02>
         <img src="img/BestProduct03.jpg" class=BP03>
       </div>
	 </div>

   <footer>
               <p class="fnone" align="center">
                  <br>WYW벤처<br>
                     사장:정현정      │  학번:2017136119<br>
                     전산부장:민초현  │  학번:2017136041<br>
                	   기획부장:정소진  │  학번:2017136111<br>
                     총무부장:정수빈  │  학번:2017136112<br>
                     Copyright &copy; 2019 WebProgramming TermProject All rights reserved.<br></p>
   </footer>


   <!--팝업창 start-->
   <div id="layer_pop">
      <button class="closeBtn" style="cursor:pointer"><img class = closeBtnimg src="img/closeButton.jpg" onclick='javascript:closePopup();'/></button>
      <div class="popupContents">
         <img src="img/Popup.png" width="300px" height="350px" border="0"/>
      </div>
   </div>
 <!--팝업창 end-->

 <!-- Fixed_bar -->
    <div class = "fixed_bar">
       <button class="GoToTop" style="cursor:pointer;"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
       <button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
       <button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
    </div>

</body>

</html>
