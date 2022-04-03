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
    <link href='detail.css' rel='stylesheet'>
	</head>

  <body>
		<div id = "detail-board">
			<div id = "representIMG">
				<img src = "./picture/SK 매직 공기청정기_대표사진.png">
			</div>
			<div id="select-option-board">
				<h2>[케어솔루션/렌탈] WD302AW LG 퓨리케어<br></h2>
				<h3>ALL직수 슬림 스윙 냉정수기(화이트)<br>
					#1년마다직수관교체 #의무약정3년 #1개월요금면제 <br>
					#CF방영최신모델</h3>
					<div id = "info">
						<div class="info-row">
							<strong class = "info-title">모델명</strong>
							<span class = "info-answer">WD302AW</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">제품분류</strong>
							<span class = "info-answer">스윙 인버터 정수기 냉정수기 직수형 정수기</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">정수방식</strong>
							<span class = "info-answer">중공사막방식</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">색상</strong>
							<span class = "info-answer">화이트</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">시스템</strong>
							<span class = "info-answer">초기부담금0원/3년의무약정/5년후소유권이전</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">제품규격</strong>
							<span class = "info-answer">170x396x520 (mm)</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">구매 가격</strong>
								<span class = "info-answer">
									<span class = "cost">769,000</span>
									&nbsp;원
								</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">할부</strong>
							<span class = "info-answer">
								<input type="radio" name="rad" id="oneTime"> 일시불
								<input type="radio" name="rad" id="3months"> 3개월
								<input type="radio" name="rad" id="6months"> 6개월
								<input type="radio" name="rad" id="12months"> 12개월
							</span>
						</div>
						<div class="info-row">
							<strong class = "info-title">월 요금</strong>
								<span class = "info-answer">
									<span class = "fee">
										<input type="radio" name="rad" id="1-3"/>
										30,510
									</span>
									&nbsp;원
									<span class = "label">1~3년</span>
								</span>
						</div>
						<div class="info-row">
							<strong class = "info-title"></strong>
								<span class = "info-answer">
									<span class = "fee">
										<input type="radio" name="rad" id="4"/>
										25,510
									</span>
									&nbsp;원
									<span class = "label">4년</span>
								</span>
						</div>
						<div class="info-row">
							<strong class = "info-title"></strong>
								<span class = "info-answer">
									<span class = "fee">
										<input type="radio" name="rad" id="5"/>
										20,510
									</span>
									&nbsp;원
									<span class = "label">5년</span>
								</span>
						</div>

					</div>
					<div id = "shop-row">
						<span id = "buy"><a href="./selectpay.php">구&nbsp;&nbsp;&nbsp;매</a></span>
						<span id = "rental"><a href="./selectpay.php">렌&nbsp;&nbsp;&nbsp;탈</a></span>
					</div>

				</div>
			</div>

			<div id="detailInfo">
				<img src = "./picture/detailInfo1.jpg">
				<img src = "./picture/detailInfo2.jpg">
				<img src = "./picture/detailInfo3.jpg">
				<img src = "./picture/detailInfo4.gif">
				<img src = "./picture/detailInfo5.jpg">
				<img src = "./picture/detailInfo6.jpg">
				<img src = "./picture/detailInfo7.jpg">

				<div id = "toTheTop">
					<a href="./AirPurifierMotion_Detail.php">
						맨&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;위&nbsp;로
					</a>
				</div>

			</div>

			<!-- Fixed_bar -->
			<div class = "fixed_bar">
			   <button class="GoToTop" style="cursor:pointer"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
			   <button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
			   <button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
			</div>
  </body>

  </html>
