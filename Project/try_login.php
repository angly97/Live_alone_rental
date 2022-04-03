<?php include "dbconnect.php";?>
<?php include "session.php";?>
<?php

    $id = $_REQUEST['idinput'];
    $password= $_REQUEST['passwordinput'];

    $sql = "SELECT * FROM member WHERE id = '{$id}' AND pword = '{$password}'";
    $res = $mysqli->query($sql);


    $row = $res->fetch_array(MYSQLI_ASSOC);

    if ($row != null) {
        $_SESSION['ses_userid'] = $row['id'];
        echo $_SESSION['ses_userid'].'님 안녕하세요<br>';
        echo ("<meta http-equiv='refresh' content='0;url=http://localhost/Project/afterMain.html'>");
    }
        // echo("<button class=gohome method=POST action=http://127.0.0.1/Project/Main.html>");
//
//         <form method=post name=form action=a.php>
//
// <input type=hidden name=postname value=값>
//
// <script>document.form.submit();</script>
//
// </form>

    if($row == null){
        echo ("<meta http-equiv='refresh' content='0;url=http://localhost/Project/loginfail.php'>");
        $loginok=0;
    }
?>
