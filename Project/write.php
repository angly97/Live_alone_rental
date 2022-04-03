<html>
<head>
	<style>

	.write{position:absolute; left:450px;top:500px;}
	.picture{position:absolute; top:155px; left:300px; width:1000px; height:300px;}
	.picture2{position:absolute; top:680px; left:50px; width:200px; height:150px;}
	.picture3{position:absolute; top:400px; left:50px; width:200px; height:200px;}

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
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=insert.php method=post>
<table class=write width=700 border=1 cellpadding=2 cellspacing=1 bgcolor=#d2d2d2>
    <tr>
        <td height=20 align=center bgcolor=#d2d2d2>
        <font color=white><B>글 쓰 기</B></font>
        </td>
    </tr>
    <!-- 입력 부분 -->
    <tr>
        <td bgcolor=white>&nbsp;
        <table>
            <tr>
                <td width=60 align=left >이름</td>
                <td align=left >
                    <INPUT type=text name=name size=30 maxlength=10>
                </td>
            </tr>
            <tr>
                <td width=60 align=left> 이메일</td>
                <td align=left >
                    <INPUT type=text name=email size=30 maxlength=25>
                </td>
            </tr>
            <tr>
                <td width=90 align=left >비밀번호</td>
                <td align=left >
                    <INPUT type=password name=pass size=20 maxlength=8>
                </td>
            </tr>
            <tr>
                <td width=60 align=left > 제  목</td>
                <td align=left >
                    <INPUT type=text name=title size=75 maxlength=35>
                </td>
            </tr>
            <tr>
                <td width=60 align=left > 내  용</td>
                <td align=left >
                    <TEXTAREA name=comment cols=85 rows=30></TEXTAREA>
                </td>
            </tr>
            <tr>
                <td colspan=10 align=center>
                    <INPUT type=submit value="글 저장하기">
                    &nbsp;&nbsp;
                    <INPUT type=button value="되돌아가기"
                    onclick="history.back(-1)"> <!--버튼이 클릭되었을때 발생하는 이벤트로 자바스크립트를 실행함. 이렇게 하면 바로 이전페이지로 감-->
                </td>
            </tr>
        </TABLE>
</td>
</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>

<!-- Fixed_bar -->
   <div class = "fixed_bar">
	<button class="GoToTop" style="cursor:pointer;"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
	<button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
	<button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
   </div>
</html>
