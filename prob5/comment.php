<?php
    include_once('../prob1/dbconfig.php');
    $Q = "INSERT INTO `dis_comments`(`id`, `content`) VALUES ('".$_POST['id']."', '".$_POST['cnt']."')";
    echo ($Q);
    mysql_query($Q);
    header("Location: index.html");
?>