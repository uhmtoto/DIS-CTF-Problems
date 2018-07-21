<?php
    sleep(1);
    session_start();
    if(!isset($_SESSION['id'])) {
        echo "<p>로그인하세요</p>";
        echo '<a href="index.html">login</a>';
        exit();
    }
    if(!isset($_GET['mode'])) {
        echo "<p>비정상적 접근입니다.</p>";
        echo '<a href="index.html">main</a>';
    }
    elseif($_GET['mode']!="plus" && $_GET['mode']!="minus") {
        echo "<p>비정상적 접근입니다.</p>";
        echo '<a href="index.html">main</a>';
    }
    include_once('dbconfig.php');
    $query = "UPDATE `disprob1users` SET `point`=`point`";
    if($_GET['mode']=='plus') $query.='+';
    else $query.='-';
    $query.="1 WHERE `id`='".$_SESSION['id']."'";
    mysql_query($query, $conn);
    header("Location: https://www.uhmtoto.xyz/disctf_probs/prob1");
?>