<?php include "session.php";
unset($_SESSION['id']);
unset($_SESSION['password']);
echo "로그아웃 되었습니다.";
echo ("<meta http-equiv='refresh' content='0;url=http://localhost/Project/Main.php'>");
?>
