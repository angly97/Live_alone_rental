
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>결제</title>
<link rel="stylesheet" type="text/css" href="signin.css">
<style>
  .search{
    width:500px;
    height:40px;
    border:1px solid #000000;
    /*border-radius: 4px;*/
    background: #ffffff;
    position: absolute;
    margin-left: 530px;
    margin-top: -60px;
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
     margin-top: -90px;
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
    margin-top: -80px;
    border:1px;
    outline:none;
    background-color: #ffffff
  }
  .brand{
    font-size: 13px;
    width:70px;
    float:right;
    margin-right: 200px;
    margin-top: -80px;
    border:1px;
    outline:none;
    background-color: #ffffff
  }
  .mypage{
    font-size: 13px;
    width:70px;
    float:right;
    margin-right: 120px;
    margin-top: -80px;
    border:1px;
    outline:none;
    background-color: #ffffff
  }
  .cart{
    font-size: 13px;
    width:70px;
    float:right;
    margin-right: 40px;
    margin-top: -80px;
    border:1px;
    outline:none;
    background-color: #ffffff
  }
  ul{
    height:40px;
    width:1500px;
    background:#FF6F61;
    list-style: none;
    position: absolute;
    padding-top:15px;
    margin-top: 50px;
    top: 60px;
  }
  ul li{float:left; margin-left: 150px; margin-right:50px;font-weight:bold;font-family:dotum}
  ul li a{ align=center; font-size:20px;color:#fff;font-weight:bold;text-decoration:none}

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
</head>
<body>
  <div class="login_page">
    <div class="loginscreen">
      <form class="payment_form">
        <img src="img/cardimg.png" class="loginperson">
        <h1>카드 결제</h1>
        <p class="cardselect" required>카드 선택</p>
        <select>
          <option>-카드 선택-</option>
          <option>신한카드</option>
          <option>우리카드</option>
          <option>농협카드</option>
          <option>국민카드</option>
          <option>카카오뱅크</option>
          <option>하나카드</option>
          <option>삼성카드</option>
          <option>현대카드</option>
          <option>롯데카드</option>
          <option>우체국</option>
          <option>수협은행</option>
          <option>비씨카드</option>
        </select>
        <p class="inputcardnum">카드번호</p>
        <input type="text" class="cardnum" placeholder="카드번호를 입력하세요 (0000-0000-0000-0000)" required/>
        <p class="valid">유효기간</p>
        <input type="month" class="expiredate" min="1990-01" max="2050-12" required/>
        <p class="cardpw">카드 비밀번호 앞 2자리</p>
        <input type="password" class="cardpwnum" placeholder="비밀번호 앞 2자리를 입력하세요" required/>
        <p class="birthday">생년월일 6자리(YYMMDD)</p>
        <input type="text" class="birth" placeholder="생년월일 6자리를 입력하세요" required/>
        <p class="checkph">휴대폰 번호</p>
        <input type="text" class="phnum" placeholder="- 없이 입력하세요" required/>
        <button class="paybutton" onclick="location.href='http://localhost/Project/afterpay.php'">결제</button>
        <button class="paycancelbutton" onclick="location.href='http://localhost/Project/selectpay.php'">취소</button>
      </form>
    </div>
  </div>
</body>
</html>

<script type="text/javascript">
$('.paybutton').click(function(){
  var cardselect = $.trim($('.cardselect').val());
  var cardnum = $.trim($('.cardnum').val());
  var expiredate = $.trim($('.expiredate').val());
  var cardpwnum = $.trim($('.cardpwnum').val());
  var birth = $.trim($('.birth').val());
  var phnum = $.trim($('.phnum').val());

  if(cardselect==""){
    $('.cardselect').focus();
    alert("빈칸!");
  }
  else if(cardnum==""){
    $('.cardnum').focus();
    alert("빈칸!!");
  }
  else if(expiredate==""){
    $('.expiredate').focus();
    alert("빈칸!!!");
  }
  else if(cardpwnum==""){
    $('.cardpwnum').focus();
    alert("빈칸!!!!");
  }
  else if(birth==""){
    $('.birth').focus();
    alert("빈칸!!!!!");
  }
  else if(phnum==""){
    $('.phnum').focus();
    alert("빈칸!!!!!!");
  }
  else{
    location.href='http://localhost/Project/afterpay.php';
  }
});
</script>
