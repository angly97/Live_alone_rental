<!DOCTYPE html>
<?php include "MainDesign.php"; ?>
<?php
//사용자 접속정보를 변수에 대입
$host = "localhost";
$user = "root";
$pw = "1234567"; // 데이터베이스 암호
$dbName = "search_db";
//MYSQLI 클래스의 인스턴스 생성하여 데이터베이스 정보 전달
$dbConnect = new mysqli ($host, $user, $pw,$dbName);
$dbConnect -> set_charset ("utf8"); // 한글처리

?>

<html lang="ko" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>나, 혼자사는 대여</title>

    <script src = "jquery-1.12.3.js" type = "text/javascript"></script>
    <link href='product.css' rel='stylesheet'>
	</head>

    <body>

	<div class = "filter">
		<h2>FILTER </h2>

			<div class = "text">
				<hr id = "OnTheFilter">
				<h5 align="left">
						<br><br>
						 Air Purifier
				</h5>
				<br><br><br>
				<h1>공기청정기</h1>
				<br><br><br>
				<h3 align="left">
          정기의 새로운 움직임<br>
          황사, 초미세먼지 빈틈없이 깨끗하게
				</h3>
			</div>

			<div class = "all">
				<img src = "picture/공기청정기_전체.png">
			</div>
			<div class = "updown">
				<img src = "picture/일반형.png">
			</div>
			<div class = "swing">
				<img src = "picture/슈퍼형.png">
			</div>
			<div class = "stand">
				<img src = "picture/미니형.png">
			</div>
	</div>

	<div id ="intermediate">
		<hr id = "UnderTheFilter">
	</div>

  <div class = "itemboard">
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/AirPurifierMotion.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details_AirPurifier">View details</div>
        <div class="stats">
          <div class="stats-container">
            <span class="product_price"> </span>
            <span class="product_name">SK 매직 공기청정기</span>
            <p> 모션 공기청정기 14평형 </p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦769,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦30,510&nbsp;</strong>
              </span>
            </div>
          </div>
        </div>
        </div>
        <div id="product-back">
          <div class="shadow"></div>
        </div>
      </div>
    <div class = "blank"></div>
    <div class = "product-card" >
        <div id="product-front">
          <img src="picture/AirPurifierSuperI.jpg" >
          <div class="image_overlay"></div>
          <div class="view_details">View details</div>
          <div class="stats">
            <div class="stats-container">
              <span class="product_price"> </span>
              <span class="product_name">SK 매직 슈퍼 I 청정기</span>
              <p> AI 공기청정기 16평형</p>
              <div class="product-options">
                <span>
                  구매
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong>&nbsp;￦619,000&nbsp;</strong>
                </span>
                <span>
                  렌탈
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong>&nbsp;￦27,900&nbsp;</strong>
                </span>
              </div>
            </div>
          </div>
          </div>
          <div id="product-back">
            <div class="shadow"></div>
          </div>
        </div>
		<div class = "blank"></div>
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/AirPurifierSuperL.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
            <span class="product_price"> </span>
            <span class="product_name">SK 매직 슈퍼 L 청정기</span>
            <p> AI 가습 공기청정기 15평형</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦619,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦24,900&nbsp;</strong>
              </span>
            </div>
          </div>
        </div>
        </div>
        <div id="product-back">
          <div class="shadow"></div>
        </div>
      </div>
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/AirPurifierSuperH.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">SK 매직 슈퍼 H 공기청정기</span>
          <p> AI 양면 공기청정기 32평형 </p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦929,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦49,900&nbsp;</strong>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div id="product-back">
        <div class="shadow"></div>
      </div>
    </div>
		<div class = "blank"></div>
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/AirPurifierMini.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">SK 매직 공기청정기</span>
          <p> mini 공기청정기 12평형</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦429,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦23,900&nbsp;</strong>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div id="product-back">
        <div class="shadow"></div>
      </div>
    </div>
  </div>

	<!-- Fixed_bar -->
	<div class = "fixed_bar">
		 <button class="GoToTop" style="cursor:pointer"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
		 <button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
		 <button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
	</div>

    <script src = "product.js" type="text/javascript"></script>
    </body>

  </html>
