<?php
include "MainDesign.php";

    echo "<script src = 'jquery-1.12.3.js' type = 'text/javascript'></script>";
    echo "<script src = 'product.js' type = 'text/javascript'></script>";
    echo "<link rel= 'stylesheet' type='text/css' href = 'product.css'/>";

    $s = mysqli_connect("localhost", "root", "1234567") or die("실패입니다.");
    mysqli_select_db($s, 'search_db');
    $search_word = $_POST["search_word"];
    $re = mysqli_query($s,"SELECT * FROM products WHERE name LIKE '%$search_word%'");
    echo"<div class = 'src_itemboard'>";
    while ($result = mysqli_fetch_array($re)) {
            echo "<div class = 'product-card' >";
                  echo "<div id='product-front'>";
                        echo "<img src='$result[5]' >";
                              echo "<div class='image_overlay'></div>";
                                    if($result[1]== "SK 매직 공기청정기"){
                                          echo "<div class='view_details_AirPurifier'>View details</div>";
                                    } else{
                                          echo "<div class='view_details'>View details</div>";
                                    }
                              echo "<div class='stats'>";
                                    echo "<div class='stats-container'>";
                                          echo "<span class='product_name'>$result[1]</span>";
                                          echo "<br>";
                                          echo "<br>";
                                          echo "<br>";
                                          echo "<div class='product-options'>";
                                                echo "<span>";
                                                echo "구매";
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                echo "<strong>&nbsp;$result[4]&nbsp;</strong>";
                                                echo "</span>";
                                                echo "<span>";
                                                echo "렌탈";
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                echo "<strong>&nbsp;$result[3]&nbsp;</strong>";
                                                echo "</span>";
                                          echo "</div>";
                                    echo "</div>";
                              echo " </div>";
                  echo "</div>";
            echo "<div id='product-back'>";
                  echo "<div class='shadow'></div>";
                  echo "</div>";
            echo "</div>";
            echo "<div class = 'blank'></div>";
      }
      echo "</div>";
    mysqli_close($s);
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>나, 혼자사는 대여</title>
   </head>

    <body>

   <!-- Fixed_bar -->
      <div class = "fixed_bar">
         <button class="GoToTop" style="cursor:pointer"><a href="#top"><img class="Topimg" src="img/top.jpg" style="height:60px; width:70px;"></a></button>
         <button class="GoToSNS" style="cursor:pointer"><a href="https://www.instagram.com/"><img class="SNSimg" src="img/sns.jpg" style="height:60px; width:70px;"></a></button>
         <button class="GoToCosCenter" style="cursor:pointer"><a href="customercenter.php"><img class="Centerimg" src="img/customer_center.jpg" style="height:60px; width:70px;"></a></button>
      </div>

</body>

</html>
