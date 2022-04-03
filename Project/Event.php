<?php include "MainDesign.php";?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>이벤트</title>
        <link rel= "stylesheet" type="text/css" href = "Mainstyle.css"/>
	  <link rel= "stylesheet" type="text/css" href = "Event.css"/>
	</head>

    <body>
	<section>
		<div class="Eventimg">
				<button class = "evntimg01" style="cursor:pointer"><img src="img/event01.png"></button>
				<button class = "evntimg02" style="cursor:pointer"><img src="img/event02.png"></button>
			<br>
				<button class = "evntimg03" style="cursor:pointer"><img src="img/event03.png"></button>
				<button class = "evntimg04" style="cursor:pointer"><img src="img/event04.png"></button>
		</div>

			<hr class="event_hr" style="border:1px color= silver;" width="100%" >

		<div class="Couponimg">
				<button class = "couponimg01" style="cursor:pointer" onclick="alert('쿠폰이 발급되었습니다');"><img src="img/coupon01.png"></button>
				<button class = "couponimg02" style="cursor:pointer" onclick="alert('쿠폰이 발급되었습니다');"><img src="img/coupon02.png"></button>
				<button class = "couponimg03" style="cursor:pointer" onclick="alert('쿠폰이 발급되었습니다');"><img src="img/coupon03.png"></button>
		</div>
	</section>
    </body>
</html>


<!DOCTYPE html>
<html lang="ko" dir="ltr">
   <head>
      <meta charset="utf-8">
      <script src="Main.js" type="text/javascript" charset="utf-8"></script>
          <link rel= "stylesheet" type="text/css" href = "Mainstyle.css"/>
   </head>

    <body>
       <div class="content">

</div>


   <!-- Fixed_bar -->
      <div class = "fixed_bar">
         <button class="GoToTop" style="cursor:pointer"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
         <button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
         <button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
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

</body>

</html>
