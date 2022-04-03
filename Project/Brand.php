<!DOCTYPE html>
<html lang="ko" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>나, 혼자사는 대여</title>
	<script src="Main.js" type="text/javascript" charset="utf-8"></script>
        <link rel= "stylesheet" type="text/css" href = "Mainstyle.css"/>
	</head>
    <body>
	<header>
	    <button class="logo" style="cursor:pointer" onclick="location.href='http://127.0.0.1/Project/afterMain.html'"><img class="logoimg" src="img/logo.png"></button>
        <input type=button class="mypage" style="cursor:pointer" onclick="location.href='http://127.0.0.1/Project/login.php'" value=로그아웃></button>
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

	<div class="Brandimg"><img src = "img/brand.png"</div>

	<!-- Fixed_bar -->
	   <div class = "fixed_bar">
		<button class="GoToTop" style="cursor:pointer"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
		<button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
		<button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
	   </div>



	</body>
</html>
