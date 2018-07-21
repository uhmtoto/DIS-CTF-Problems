<?php
    session_start();
    include_once('dbconfig.php');
    if(isset($_SESSION['id'])) {
        exit("이미 로그인 되어있습니다.");
    }
    $id = $_POST['id'];
    $pw = md5($_POST['pw']);
    $query = "select * from `disprob1users` where id='$id' and pw='$pw'";
    $res = mysql_query($query, $conn);
    $res = mysql_fetch_array($res);
    if($res['pw']===$pw) {
        $_SESSION['id']=$id;
    }
    header("Location: https://www.uhmtoto.xyz/disctf_probs/prob1/");
?>