<!DOCTYPE html>
<html lang="ko" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>나, 혼자사는 대여</title>
      <script src="Main.js" type="text/javascript" charset="utf-8"></script>
          <link rel= "stylesheet" type="text/css" href = "Mainstyle.css"/>
   </head>

    <body>
       <div class="content">

   <header>

         <!--맨위로 버튼을 위한 주소 설정-->
         <a name = top>

         <button class="logo" style="cursor:pointer"><a href="Main.php"><img class="logoimg" src="img/logo.png"></a></button>
         <button class="mypage" style="cursor:pointer"><a href="login.php">로그아웃</a></button>
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

</body>

</html>
