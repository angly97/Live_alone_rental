<?php include 'dbconnect.php';?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>로그인</title>
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
  ul li{float:left; margin-left: 150px; margin-right:50px;font-weight:bold;font-family:Malgun Gothic;}
  ul li a{ align=center; font-size:20px;color:#fff;font-weight:bold;text-decoration:none}

  a {
        text-decoration:none;
        link : TEXT-DECORATION: none;
        visited : TEXT-DECORATION: none;
  }

  </style>
 <button class="logo" style="cursor:pointer" onclick="location.href='http://localhost/Project/Main.php'"><img class="logoimg" src="img/logo.png"></button>
  <input type=button class="mypage" style="cursor:pointer" onclick="location.href='http://localhost/Project/login.php#'" value=로그인></button>
  <button class="brand" style="cursor:pointer">브랜드</button>
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
<div class ="loginscreen">
  <!-- <img src="img/loginperson.png" class="loginperson"> -->
  <form class="login_form" name="loginbtn" method="post" action="try_login.php">
    <img src="img/loginperson.png" class="loginperson">
    <h1 class="loginlb">로그인</h1>
    <p class="idinput"> 아이디</p>
    <input type="text" name="idinput" placeholder="아이디를 입력하세요" required/>
    <p class="passwordinput">비밀번호</p>
    <input type="password" name="passwordinput" placeholder="비밀번호를 입력하세요" required/>
    <input type="submit" name="loginbtn" value="Login">
    <p class="message1">회원이 아니신가요?<a href="#"> 회원가입 하기 </a></p>
  </form>

  <form class="register_form"  name="signinbtn" method="post" action="login_insert.php"><!--action="login_insert.php"-->
    <img src="img/loginperson.png" class="loginperson">
    <h1 class="signinlb">회원가입</h1>
    <input type="text" name="name" class="name" placeholder="성명" required/>
    <input type="text" name="id" class="id" placeholder="아이디" required/>
    <button class="overlapbtn" href=#>중복 확인</button>
    <label class="overlapmsg">중복 확인이 필요합니다</label>
    <input type="password" name="password" class="password" placeholder="비밀번호" required/>
    <input type="password" name="passwordcheck" class="passwordcheck" placeholder="비밀번호 확인" required/>
    <button class="pwcheckbtn" href="#"> 비밀번호 확인</button>
    <label class="pwcheckmsg">비밀번호를 입력해주세요</label>
    <input type="text" name="phone" class="phone" placeholder="전화번호(010-1111-1111)" required/>
    <input type="text" name="address" class="address" placeholder="주소" required/>
    <input type="submit" name="signinbtn" class="signinbtn" value="회원가입">
    <p class="message2" >이미 회원이신가요?<a href="#"> 로그인 하기 </a></p>
  </form>
</div>
</div>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type="text/javascript">
$('.message1 a').click(function(){ /*회원가입 페이지로 변환*/
  $('form').animate({height:"toggle", opacity: "toggle"},"slow");
  $('title').text("회원가입");
});
$('.message2 a').click(function(){ /*로그인 페이지로 변환*/
  $('form').animate({height:"toggle", opacity: "toggle"},"slow");
  $('title').text("로그인");
});

/*아이디 중복 확인*/
$('.overlapbtn').click(function(){
  $('.overlapmsg').text("  사용할 수 있는 아이디입니다");
});

/*비밀번호 일치하는지 확인*/
$('.pwcheckbtn').click(function(){
  var password = $.trim($('.password').val());
  var passwordcheck = $.trim($('.passwordcheck').val());
  if(password!=passwordcheck){
    $('.pwcheckmsg').text("  비밀번호 불일치");
    $('.passwordcheck').focus();
  }
  else{
    $('.pwcheckmsg').text("  비밀번호 일치");
    $('.phone').focus();
  }
});

   //회원가입 버튼//
$('.signinbtn').ready(function(){

    var name = $.trim($('.name').val());
    var id = $.trim($('.id').val());
    var password = $.trim($('.password').val());
    var passwordcheck = $.trim($('.passwordcheck').val());
    var phone = $.trim($('.phone').val());
    var address = $.trim($('.address').val());

    $.ajax({
        url : 'login_insert.php',
        type: 'POST',
        data : {'id':id,'password':password,'phone':phone,'address':address},
        dataType: "json",
       success:function(data){
          if(data.code=='FALSE'){
                alert(data.msg);
                return;
          }else{
            alert(data.msg);
          }
         }
      })
});
</script>

</body>
</html>
