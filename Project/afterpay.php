
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>결제 완료</title>
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
      <form class="paycomplete_form">
        <h1 align=center>결제 완료! 감사합니다</h1>
        <h5 align=center> 홈 화면으로 이동합니다</h5>
        <p><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label></p>
        <meta http-equiv='refresh' content='2;url=http://localhost/Project/afterMain.html'>
      </form>
    </div>
  </div>
</body>
</html>
