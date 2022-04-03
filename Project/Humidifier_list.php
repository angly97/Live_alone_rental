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
						 Humidifier
				</h5>
				<br><br><br>
				<h1>가습기</h1>
				<br><br><br>
				<h3 align="left">
					 다양한 공간에 따라 적합한<br>
					 다양한 분사방식을 초이스!
				</h3>
			</div>

			<div class = "all">
				<img src = "picture/가습기_전체.png">
			</div>
			<div class = "updown">
				<img src = "picture/디펜서형.png">
			</div>
			<div class = "swing">
				<img src = "picture/CP3형.png">
			</div>
			<div class = "stand">
				<img src = "picture/어토미서형.png">
			</div>
	</div>

	<div id ="intermediate">
		<hr id = "UnderTheFilter">
	</div>

  <div class = "itemboard">
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/HumidifierPH15.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
            <span class="product_price"></span>
            <span class="product_name">디펜서 공기 가습기</span>
            <p> 대용량 PH15 증발 가습형 </p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦469,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦19,510&nbsp;</strong>
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
          <img src="picture/HumidifierPH28.jpg" >
          <div class="image_overlay"></div>
          <div class="view_details">View details</div>
          <div class="stats">
            <div class="stats-container">
              <span class="product_price"></span>
              <span class="product_name">디펜서 공기 가습기</span>
              <p> 대용량 PH28 증발 가습형</p>
              <div class="product-options">
                <span>
                  구매
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong>&nbsp;￦519,000&nbsp;</strong>
                </span>
                <span>
                  렌탈
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong>&nbsp;￦21,600&nbsp;</strong>
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
        <img src="picture/HumidifierCP3.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
            <span class="product_price"> </span>
            <span class="product_name">CP3 미니 스팀가습기</span>
            <p> 살균 습팀 습도 조절형</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦709,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦29,500&nbsp;</strong>
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
        <img src="picture/Humidifier505.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">어토미서 505 원심가습기</span>
          <p> 원심 분사 습도 조절형 </p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦215,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦8,900&nbsp;</strong>
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
        <img src="picture/Humidifier3001.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">어토미서 3001 원심가습기</span>
          <p> 원심 분사 습도 조절형 </p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦215,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦8,900&nbsp;</strong>
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
        <img src="picture/HumidifierABS3.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">어토미서 ABS3 원심가습기 </span>
          <p> 원심 분사 습도 조절형 </p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦215,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦8,900&nbsp;</strong>
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
        <img src="picture/HumidifierRS.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">RS 스팀가습기</span>
          <p> 열 저항 스팀 습도 조절형 </p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦1095,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦45,600&nbsp;</strong>
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
