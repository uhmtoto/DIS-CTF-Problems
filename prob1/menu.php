 <?php @session_start(); ?>
 <html>
    <head>
		<!-- $query = "UPDATE ???? SET ".????." WHERE `id`='".$_SESSION['id']."'"; -->
        <!-- mysql_query($query, $conn); -->
        <title>Can you be the GOD?</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="menu.css">
    </head>
    <body>
        <?php 
        if(!isset($_SESSION['id'])) {
            echo "<script>alert('login 하세요');</script>";
            header("Location: index.html");
            exit();
        } 
        
        /* point */
        $godpoint = 2147483646;
        include_once('dbconfig.php');
        $query = "select * from `disprob1users` where id='".$_SESSION['id']."'";
        $res = mysql_query($query, $conn);
        $res = mysql_fetch_array($res);
        if($res['point']>$godpoint) {
            echo "<script>window.location.replace('https://www.uhmtoto.xyz/disctf_probs/prob1/RksIKgSb5D8t7j4X.html');</script>";
            exit();
        }
        ?>
        <div id="container">
            <p><?php session_start(); echo "hello, ".($_SESSION['id']); ?></p>
            <p>if you win the god, you can be the god!!</p>
            <form method="post" action="rank.php">
                <input type="button" value="point +1" class="btn btn-primary" onclick="window.location.href='point.php?mode=plus';">
                <input type="button" value="point -1" class="btn btn-danger" onclick="window.location.href='point.php?mode=minus';">
                <input type="hidden" name="query" value="btn btn-info">
                <input type="button" value="logout" class="btn btn-dark" onclick="window.location.href='logout.php';">
                <input type="submit" value="Rank" class="btn btn-info">
            </form>
        </div>
    </body>
</html>
