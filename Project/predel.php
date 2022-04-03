<html>
<head>
	<style>

	.del{position:absolute; top:250px; left:550px; }

	</style>
</head>
</html>



<?php include "MainDesign.php"; ?>
<html lang="ko" dir="ltr">
<head>
		<meta charset="utf-8">
		<title>나, 혼자사는 대여</title>
	<script src="Main.js" type="text/javascript" charset="utf-8"></script>
        <link rel= "stylesheet" type="text/css" href = "Mainstyle.css"/>

<center>
<br>

<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=del.php?id=<?=$_GET['id']?> method=post>

<table class="del" width=500 border=1 cellpadding=2 cellspacing=1 bgcolor=#d2d2d2>
<tr>
    <td height=30 align=center bgcolssor=#999999>
        <font color=black><B>비 밀 번 호 확 인</B></font>
    </td>
</tr>
<tr>
    <td align=center>
        <font color=black><B>비밀번호 : </B>
        <INPUT type=password name=pass size=10 maxlength=12>
        <INPUT type=submit value="확 인">
        <INPUT type=button value="취 소" onclick="history.back(-1)">
    </td>
</tr>
</table>

<!-- Fixed_bar -->
   <div class = "fixed_bar">
	<button class="GoToTop" style="cursor:pointer;"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
	<button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
	<button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
   </div>
</html>
