<?php include 'dbconnect.php';?>
<?php include 'session.php';?>

<!doctype html>
<?php
$sql = "CREATE TABLE member (";
$sql = $sql."id varchar(12) not null,";
$sql = $sql."name varchar(8) not null,";
$sql = $sql."pword varchar(12) not null,";
$sql = $sql."ph char(20),";
$sql = $sql."address varchar(20),";
$sql = $sql."primary key(id));";

// if($mysqli->query($sql)){
//    echo '테이블 생성 완료<br>';
//    }else{
//    echo '테이블 생성 실패<br>';
//  }

?>
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
  ul li{float:left; margin-left: 150px; margin-right:50px;font-weight:bold;font-family:dotum}
  ul li a{ align=center; font-size:20px;color:#fff;font-weight:bold;text-decoration:none}

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
  <form class="complete_form">
    <label class="welcome">저희 사이트에 방문해 주셔서 감사합니다</label>
    <p><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label></p>
    <input type=button class="backlogin" onclick="location.href='http://localhost/Project/login.php'" value=로그인></button>
    <input type=button class="back" onclick="location.href='http://localhost/Project/Main.php'" value=홈으로></button>
  </form>
</div>
</div>
</body>
</html>
<?php
 //칸에 입력된 값 받아오기

 $id=$_REQUEST['id'];
 $name=$_REQUEST['name'];
 //md5($_POST['password']);
 $password= $_REQUEST['password'];
 $passwordcheck= $_REQUEST['passwordcheck'];
 $phone=$_REQUEST['phone'];
 $address=$_REQUEST['address'];
  // echo"$id<br>";
  // echo"$name<br>";
  // echo" $password<br>";
  // echo"$phone<br>";
  // echo"$address<br>";
 /*받아오는 것까지는 성공*/


 $res=true;
 if($password!=$passwordcheck){
   $res=false;
 }
 $sql = "select count(*) as cnt from member where id=?";
 // 데이터 받으세요
 if($mysqli->query($sql)){
   $data['cnt']++;
    if($data['cnt']>=1){
    $res=false;
       exit;
  }
}

 if($res){
  $sql = "insert into member(id, name, pword, ph, address)";
  $sql .= "values('$id', '$name', '$password', '$phone', '$address')";

  if($mysqli->query($sql)){
   echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp회원가입을 성공하였습니다';
  }else{
   echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp회원가입을 실패하였습니다<br>';
  }
 }


?>
