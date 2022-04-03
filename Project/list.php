<html>
<head>
	<style>

	.title{position:absolute; top:480px;left:300px;}
	              .list{position:absolute; left:500px;top:550px;}
								.picture{position:absolute; top:155px; left:300px; width:1000px; height:300px;}
								.picture2{position:absolute; top:680px; left:50px; width:200px; height:150px;}
								.picture3{position:absolute; top:400px; left:50px; width:200px; height:200px;}
								.link{position:absolute; top:530px; left:500px;}
								a {
								      text-decoration:none;
								      link : TEXT-DECORATION: none;
								      visited : TEXT-DECORATION: none;
									font-family:Malgun Gothic
								}


	</style>

	<!--검색-->
	<form action="search.php" method="post">
	   <div class="search" align=center>
		    <input class = "src" type="text" name="search_word" placeholder="검색하기">
		     <input type="submit" value="submit" class="srcbtn"><img class="findimg" src="img/find.png">
		</div>
	</form>
</head>
<img class = "picture" src="img/ad03.png" >
	 <img class = "picture2" src="img/ad05.png" >
	 <img class = "picture3" src="img/ad06.png" >

</html>

<?php include "MainDesign.php"; ?>
<?php
//데이터베이스 연결하기
include "db_info.php";

$page_size = 20;
$page_list_size = 10;

$no=0;

if (!$no || $no < 0) $no=0;

$query = "select * from noticeboard order by id desc limit $no,$page_size";
$result = mysqli_query($conn,$query);

// 총 게시물 수 구하기
$result_count = mysqli_query( $conn,"select count(*) from noticeboard");
$result_row = mysqli_fetch_row($result_count);
$total_row = $result_row[0];

// 총 페이지 계산
if ($total_row <= 0) $total_rows = 0;    // 총 게시물의 값이 없으면 기본값으로 세팅

$total_page = floor(($total_row - 1) / $page_size);

// 현재 페이지 계산
$current_page = floor($no/$page_size);
?>

<html>
<html lang="ko" dir="ltr">
<head>
		<meta charset="utf-8">
		<title>나, 혼자사는 대여</title>

<center>
<BR>

	 <img class = picture src="img/ad03.png" >
	 <img class = picture2 src="img/ad05.png" >
	 <img class = picture3 src="img/ad06.png" >
<!-- 게시판 타이틀 -->
<div class=title>
    <h3>l 사용후기 게시판</h3>

</div>
<BR>
<BR>

<!-- 게시물 리스트를 보이기 위한 테이블 -->
<table class = list width=580 border=0 cellpadding=2 cellsacing=1 bgcolor=#777777>
<!-- 리스트 타이틀 부분 -->
<tr height=20 bgcolor=#999999>
    <td width=30 align=center>
        <font color=white>번호</font>
    </td>
    <td width=370 align=center>
        <font color=white>제 목</font>
    </td>
    <td width=50 align=center>
        <font color=white>글쓴이</font>
    </td>
    <td width=60 align=center>
        <font color=white>날 짜</font>
    </td>
    <td width=40 align=center>
        <font color=white>조회수</font>
    </td>
</tr>
<!-- 리스트 타이틀 끝 -->

<!-- 리스트 부분 시작 -->
<?php
while($row=mysqli_fetch_array($result))
{

?>
<!-- 행 시작 -->
<tr>
    <!-- 번호 -->
    <td height=20 bgcolor=white align=center>
        <a href=read.php?id=<?=$row['id']?>&no=<?=$no?>><?=$row['id']?></a>
    </td>
    <!-- 번호 끝 -->
    <!-- 제목 -->
    <td height=20 bgcolor=white>&nbsp;
        <a href=read.php?id=<?=$row['id']?>&no=<?=$no?>><?=strip_tags($row['title'],
        '<b><i>');?></a>
    </td>
    <!-- 제목 끝 -->
    <!-- 이름 -->
    <td align=center height=20 bgcolor=white>
        <font color=black>
            <a href="mailto:<?=$row['email']?>"><?=$row['name']?></a>
        </font>
    </td>
    <!-- 이름 끝 -->
    <!-- 날짜 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row['wdate']?></font>
    </td>
    <!-- 날짜 끝 -->
    <!-- 조회수 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row['view']?></font>
    </td>
    <!-- 조회수 끝 -->
</tr>
<!-- 행 끝 -->



<?php
}    // end while

mysqli_close($conn);
?>
</table>

<table border=0>
<tr>
<td width=600 height=20 align=center rowspan=4>
<font color=gray>
&nbsp;

<?php

// 페이지 리스트
// 페이지 리스트의 첫번째로 표시될 페이지가 몇번째 페이지인지 구하는 부분
$start_page = (int)($current_page / $page_list_size) * $page_list_size;

// 페이지 리스트의 마지막 페이지가 몇번째 페이지인지 구하는 부분
$end_page = $start_page + $page_list_size - 1;
if ($total_page < $end_page) $end_page = $total_page;

// 이전 페이지 리스트 보여주기
if ($start_page >= $page_list_size){
    $prev_list = ($start_page - 1) * $page_size;
    echo ("<a href=\"$PHP_SELF?no=$prev_list\">◀ </a>\n");
}

// 페이지 리스트를 출력

?>

</font>
</td>
</tr>
</table>

<a class ="link" href=write.php>글쓰기</a>
</center>
</body>



<!-- Fixed_bar -->
   <div class = "fixed_bar">
	<button class="GoToTop" style="cursor:pointer;"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
	<button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
	<button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
   </div>

</html>
