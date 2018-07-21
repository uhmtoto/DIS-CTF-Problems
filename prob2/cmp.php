<?php
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    if($v1 === $v2) {
        header("Location: https://www.uhmtoto.xyz/disctf_probs/prob2/?text=they are same!");
    }
    else if(md5($v1) == md5($v2)) {
        header("Location: https://www.uhmtoto.xyz/disctf_probs/prob2/?text=their hash are same!<br>FLAG IS flag{MD5_cndehf}");
    }
    else {
        header("Location: https://www.uhmtoto.xyz/disctf_probs/prob2/?text=no");
    }
?>