<?php
    include_once('dbconfig.php');
    $id=$_POST['id'];
    $pw=$_POST['pw'];
    $query = "select * from `disprob1users` where `id`='$id'";
    $res = mysql_query($query, $conn);
    if(mysql_num_rows($res) >= 1) {
        header("Location: https://www.uhmtoto.xyz/disctf_probs/prob1/");
        exit();
    }
    $query="insert into `disprob1users`(`id`, `pw`, `point`) VALUES ('$id', md5('$pw'), 0)";
    mysql_query($query, $conn);
    header("Location: https://www.uhmtoto.xyz/disctf_probs/prob1/");
?>