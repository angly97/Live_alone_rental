<html>
<head>
	<style>
	.picture{position:absolute; top:155px; left:300px; width:1000px; height:300px;}
	.picture2{position:absolute; top:680px; left:50px; width:200px; height:150px;}
	.picture3{position:absolute; top:400px; left:50px; width:200px; height:200px;}

.read{position:absolute; top:500px; left :500px;}

</style>
</head>
<img class = "picture" src="img/ad03.png" >
	<img class = "picture2" src="img/ad05.png" >
	<img class = "picture3" src="img/ad06.png" >
	</html>



<?php include "MainDesign.php"; ?>
<html lang="ko" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>나, 혼자사는 대여</title>

<center>
<BR>
<?php
//데이터베이스 연결하기
include "db_info.php";

$id = $_GET['id'];
$no = $_GET['no'];

//조회수 업데이트
$result = mysqli_query($conn,"update noticeboard set view=view+1 where id=$id");
//글 정보 가져오기
$result = mysqli_query($conn,"select * from noticeboard where id=$id");
$row = mysqli_fetch_array($result);
?>
<table class="read" width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
<tr>
    <td height=20 colspan=4 align=center bgcolor=#999999>
        <font color=white><B><?=$row['title']?></B></font>
    </td>
</tr>
<tr>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>글쓴이</td><td width=240 bgcolor=white><?=$row['name']?></td>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>이메일</td><td width=240 bgcolor=white><?=$row['email']?></td>

<tr>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>날&nbsp;&nbsp;&nbsp;짜</td><td width=240 bgcolor=white><?=$row['wdate']?></td>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>조회수</td><td width=240 bgcolor=white><?=$row['view']?></td>
</tr>
<tr>
    <td bgcolor=white colspan=4>
        <font color=black>
            <pre><?=$row['comment']?></pre>
        </font>
    </td>
</tr>
<!-- 기타 버튼들 -->
<tr>
    <td colspan=4 bgcolor=#999999>
        <table width=100%>
            <tr>
                <td width=200 align=left height=20>
                    <a href=list.php?no=<?=$no?>><font color=white>[목록보기]</font></a>
                    <a href=write.php><font color=white>[글쓰기]</font></a>
                    <a href=predel.php?id=<?=$id?>><font color=white>[삭제]</font></a>
                </td>

<!-- 기타 버튼 끝 -->


</b></font>
</td>
</tr>
</table>

<?php
mysqli_close($conn);
?>

</center>
</body>
</html>
