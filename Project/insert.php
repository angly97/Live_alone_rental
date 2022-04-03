<html>
<head>
	<style>
	.title{position:absolute; top:480px;left:300px;}
	              .list{position:absolute; left:500px;top:550px;}
								.picture{position:absolute; top:147px; left:300px; width:1000px; height:300px;}
								.picture2{position:absolute; top:650px; left:50px; width:200px; height:150px;}
								.picture3{position:absolute; top:400px; left:50px; width:200px; height:200px;}
								.link{position:absolute; top:530px; left:500px;}
								.ok{position:absolute; top:800px; left:600px;}
	              </style>


	</style>

</head>
</html>

<?php include "MainDesign.php"; ?>

<?php
// 데이터베이스 연결하기
include "db_info.php";

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$title=$_POST['title'];
$comment=$_POST['comment'];
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];

$query = "insert into noticeboard(name, email, pass, title, comment, wdate, ip, view)";
$query .="values('$name', '$email', '$pass', '$title', '$comment', now(), '$REMOTE_ADDR', 0)";

$result = mysqli_query($conn,$query);

//데이터베이스 연결 종료
mysqli_close($conn);

// 새 글 쓰기인 경우 리스트로 돌아가기
echo("<meta http-equiv='Refresh' content='1; URL=list.php'>");
?>
<center>
<div style="float:left; color:black; padding:200px 0px 0 500px; font-size:15px; font-weight:bold;">정상적으로 저장되었습니다.</div>
