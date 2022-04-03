
<!DOCTYPE html>
<html>
<html lang="ko" dir="ltr">
<head>
  <meta charset="utf-8">
  		<title>나, 혼자사는 대여</title>
  	<script src="Main.js" type="text/javascript" charset="utf-8"></script>
          <link rel= "stylesheet" type="text/css" href = "Mainstyle.css"/>
<style>

.title{position:absolute; top:400px;left:400px;}
.picture{position:absolute; top:165px; left:-13px; width:1535px;}
.picture3{position:absolute; top:500px; left:40px; width:300px; height:400px;}
.subtitle{position:absolute; top:480px; left:720px;}
.list{position:absolute; top:550px; left:490px;}
.list-bot{position:absolute; top:860px; left:820px;}
.more{position:absolute; top:900px; left:785px; width:100px; height:30px; color:#FFFFFF; background-color:#6e6e6e; border-radius:10px;}
* {
  margin:0; padding:0;
}

body {
  font-size:17px;
  font-family:"맑은 고딕";
}

 a {
    color:#000;
   text-decoration:none;
   cursor:pointer;

   text-decoration:none;
   link : TEXT-DECORATION: none;
   visited : TEXT-DECORATION: none;
  }


  a:hover {
    color:yellowgreen;
    text-decoration:underline;
  }

#board {
  width:900px;
  margin:50px auto 30px;
}

  #title {

   height:45px;
   font-weight:bold;
   font-size:19px;
    clear:both;
  }

.list dl dt {
  float:left;
}

.list dl dd {
  float:left;
}

.list .num {width:80px; left:50px;}
.list .sub {width:450px;}
.list .name {width:115px;}
.list .data {width:105px;}
.list .count {width:70px; }


.list dt {
  width:150px;
  text-align:center;
  background-color:#FAC1C1;
  border-bottom:2px solid black;
  padding:10px 5px;
  }

.list dd {
  width:150px;
  text-align:center;
  padding:10px 7px;
  border-bottom:1px solid #ccc;
}

  .list dd.sub {
  text-align:left; padding-left:7px; width:453px;
}


#board .list-bot {
   clear: both;
   text-align:center;
   padding:12px 11px;
}

.search{
  width:500px;
  height:40px;
  border:1px solid #000000;
  /*border-radius: 4px;*/
  background: #ffffff;
  position: absolute;
  margin-left: 530px;
  margin-top: -20px;
}
.src{
  font-size: 16px;
  width:325px;
  padding:10px;
  border:1px;
  outline:none;
  float:left;

}
.srcbtn{
  width:50px;
  height:100%;
  background:#ffffff;
  outline:none;
  float:right;
  color:#ffffff
}
.logo{
   float:left;
   margin-top: -50px;
   margin-left: 15px;
   width:150px;
   height:100px;
   outline:none;
   border:1px;
   background-color: #ffffff
}
.logoimg{
   float:left;
   margin-left: 15px;
   width:200px;
   height:100px;
   outline:none;
}
.customer{
  font-size: 13px;
  width:70px;
  float:right;
  margin-right: 280px;
  margin-top: -40px;
  border:1px;
  outline:none;
  background-color: #ffffff
}
.brand{
  font-size: 13px;
  width:70px;
  float:right;
  margin-right: 200px;
  margin-top: -40px;
  border:1px;
  outline:none;
  background-color: #ffffff
}
.mypage{
  font-size: 13px;
  width:70px;
  float:right;
  margin-right: 120px;
  margin-top: -40px;
  border:1px;
  outline:none;
  background-color: #ffffff
}
.cart{
  font-size: 13px;
  width:70px;
  float:right;
  margin-right: 40px;
  margin-top: -40px;
  border:1px;
  outline:none;
  background-color: #ffffff
}
ul{
  height:40px;
  width:1535px;
  background:#FF6F61;
  list-style: none;
  position: absolute;
  padding-top:15px;
  margin-top: 50px;
  top: 60px;
}

ul li{float:left; margin-left: 150px; margin-right:50px;font-weight:bold;font-family:dotum}
ul li a{ align=center; font-size:20px;color:#fff;font-weight:bold;text-decoration:none; font-family:Malgun Gothic}
</style>

<button class="logo" style="cursor:pointer" onclick="location.href='http://localhost/Project/afterMain.html'"><img class="logoimg" src="img/logo.png"></button>
  <input type=button class="mypage" style="cursor:pointer" onclick="location.href='http://127.0.0.1/Project/login.php'" value=로그아웃></button>
<button class="brand" style="cursor:pointer"><a href="Brand.php">브랜드</a></button>
 <button class="customer" style="cursor:pointer"><a href="customercenter.php">고객센터</a></button>

<div class="search" align=center>
  <input class="src" type="text" placeholder="검색하기">
  <button class="srcbtn"><img class="findimg" src="img/find.png"></button>
</div>
<ul>
<li ><a href="AirPurifier_list.php">공기 청정기</a></li>
<li ><a href="Humidifier_list.php">가습기</a></li>
<li ><a href="WaterPurifier_list.php">정수기</a></li>
<li><a href="Event.php">이벤트/쿠폰</a></li>
<li ><a href="list.php">상품 후기</a></li>
</ul>
</style>

<!--검색-->
<form action="search.php" method="post">
   <div class="search" align=center>
          <input class = "src" type="text" name="search_word" placeholder="검색하기">
           <input type="submit" value="submit" class="srcbtn"><img class="findimg" src="img/find.png">
      </div>
</form>

</head>

  <img class = picture src="img/customercenter.png" >
  <img class = picture3 src="img/ad04.png" >
<div id="board">
<div class=title>
    <h2>l 고객센터</h2>

</div>
<h1 class = subtitle align=center>궁금해요! Q&A</h1>

<div class="list">
  <dl>
   <dt class="sub">제목</dt>
   <dt class="name">작성자</dt>
   <dt class="data">작성일</dt>
   <dt class="count">조회수</dt>
  </dl>

  <dl>
   <dd class="sub"><a href"#">Q. 결제 취소 및 환불 절차는 어떻게 되나요?</a></dd>
   <dd class="name">관리자</dd>
   <dd class="data">2019-05-28</dd>
   <dd class="count">145</dd>
  </dl>

  <dl>
   <dd class="sub"><a href"#">Q. 가스렌지 배송시 가스 연결도 가능 한가요?</a></dd>
   <dd class="name">관리자</dd>
   <dd class="data">2019-05-28</dd>
   <dd class="count">715</dd>
  </dl>

  <dl>
   <dd class="sub"><a href"#">Q. 언제 배송 되나요?</a></dd>
   <dd class="name">관리자</dd>
   <dd class="data">2019-05-28</dd>
   <dd class="count" >456</dd>
  </dl>

  <dl>
   <dd class="sub"><a href"#">Q. 제품 교환/반품 절차는 어떻게 되나요?</a></dd>
   <dd class="name">관리자</dd>
   <dd class="data">2019-05-28</dd>
   <dd class="count">865</dd>
  </dl>

  <dl>
   <dd class="sub"><a href"#">Q. 설치 기사가 방문하나요? 택배 배송인가요?</a></dd>
   <dd class="name">관리자</dd>
   <dd class="data">2019-05-28</dd>
   <dd class="count">497</dd>
  </dl>

  <dl>
   <dd class="sub"><a href"#">Q. 초기 설치 비용이 발생 되나요?</a></dd>
   <dd class="name">관리자</dd>
   <dd class="data">2019-05-28</dd>
   <dd class="count">347</dd>
  </dl>
</div>



<div class="list-bot">
<p>
  <a href="#">1</a>
</p>
</div>
<input class= "more" type='button' value='Q&A더보기'/>
</div>

</body>

<!-- Fixed_bar -->
   <div class = "fixed_bar">
      <button class="GoToTop" style="cursor:pointer;"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
      <button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
      <button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
   </div>
</html>
