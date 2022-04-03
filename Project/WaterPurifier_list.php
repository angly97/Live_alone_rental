<!DOCTYPE html>
<?php include "MainDesign.php" ?>
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
						 Water Purifier
				</h5>
				<br><br><br>
				<h1>정수기</h1>
				<br><br><br>
				<h3 align="left">
					 버튼을 누르는 순간 바로!<br>
					 언제나 신선한 All 직수 방식
				</h3>
			</div>

			<div class = "all">
				<img src = "picture/정수기_전체.png">
			</div>
			<div class = "updown">
				<img src = "picture/업다운형.png">
			</div>
			<div class = "swing">
				<img src = "picture/스윙형.png">
			</div>
			<div class = "stand">
				<img src = "picture/스탠드형.png">
			</div>
	</div>

	<div id ="intermediate">
		<hr id = "UnderTheFilter">
	</div>

	<div class = "itemboard">
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/WaterPurifierUpDown1.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</a></div>
        <div class="stats">
          <div class="stats-container">
            <span class="product_price"> </span>
            <span class="product_name">LG 퓨리케어 정수기</span>
            <p> All 직수 슬림 업다운형 화이트</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦1,990,900&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦36,900&nbsp;</strong>
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
          <img src="picture/WaterPurifierUpDown2.jpg" >
          <div class="image_overlay"></div>
          <div class="view_details">View details</div>
          <div class="stats">
            <div class="stats-container">
              <span class="product_price"> </span>
              <span class="product_name">LG 퓨리케어 정수기</span>
              <p> All 직수 슬림 업다운형 실버</p>
              <div class="product-options">
                <span>
                  구매
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong>&nbsp;￦1,990,900&nbsp;</strong>
                </span>
                <span>
                  렌탈
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong>&nbsp;￦36,900&nbsp;</strong>
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
        <img src="picture/WaterPurifierUpDown3.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
            <span class="product_price"> </span>
            <span class="product_name">LG 퓨리케어 정수기</span>
            <p> All 직수 슬림 업다운형 블랙</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦1,990,900&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦36,900&nbsp;</strong>
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
        <img src="picture/WaterPurifierSwing1.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">LG 퓨리케어 정수기</span>
          <p> All 직수 스윙형 실버</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦2,100,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦38,900&nbsp;</strong>
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
        <img src="picture/WaterPurifierSwing2.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">LG 퓨리케어 정수기</span>
          <p> All 직수 스윙형 블랙</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦2,100,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦38,900&nbsp;</strong>
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
        <img src="picture/WaterPurifierStand1.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">LG 퓨리케어 정수기</span>
          <p> All 직수 스탠드형 화이트</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦910,000&nbsp;</strong>
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
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/WaterPurifierStand2.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">LG 퓨리케어 인버터 정수기</span>
          <p> All 직수 슬림 스탠드형 화이트</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦910,000&nbsp;</strong>
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
		<div class = "blank"></div>
    <div class = "product-card" >
      <div id="product-front">
        <img src="picture/WaterPurifierStand3.jpg" >
        <div class="image_overlay"></div>
        <div class="view_details">View details</div>
        <div class="stats">
          <div class="stats-container">
          <span class="product_price"> </span>
          <span class="product_name">LG 퓨리케어 슬림 정수기</span>
          <p> All 직수 슬림 스탠드형 화이트</p>
            <div class="product-options">
              <span>
                구매
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦890,000&nbsp;</strong>
              </span>
              <span>
                렌탈
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>&nbsp;￦20,900&nbsp;</strong>
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
