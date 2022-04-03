<html>
<head>
	<style>

	.title{position:absolute; top:480px;left:300px;}
              .list{position:absolute; left:500px;top:550px;}
							.picture{position:absolute; top:147px; left:300px; width:1000px; height:300px;}
							.picture2{position:absolute; top:650px; left:50px; width:200px; height:150px;}
							.picture3{position:absolute; top:400px; left:50px; width:200px; height:200px;}
							.link{position:absolute; top:530px; left:500px;}
							.ok{position:absolute; top:800px; left:800px;}

	</style>

</head>
</html>

<?php include "MainDesign.php"; ?>

<?php
//데이터베이스 연결하기
include "db_info.php";

$id = $_GET['id'];
$pass = $_POST['pass'];

$result = mysqli_query($conn,"select pass from noticeboard where id=$id");
$row = mysqli_fetch_array($result);

if ($pass == $row['pass'])
{
    $conndel = "delete from noticeboard where id=$id";
    $result = mysqli_query($conn,$conndel);
}
else
{
    echo ("
    <script>
    alert('비밀번호가 틀립니다.');
    history.go(-1)
    </script>
    ");
    exit;
}
?>
<center>
<meta http-equiv='Refresh' content='1; URL=list.php'>
<div style="float:left; color:black; padding:200px 0px 0 500px; font-size:15px; font-weight:bold;">정상적으로 삭제되었습니다.</div>
