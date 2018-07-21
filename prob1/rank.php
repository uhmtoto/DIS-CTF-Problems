<?php session_start(); ?>
<html>
    <head>
        <title>Can you be the GOD? :D</title>
        <link rel="stylesheet" href="rank.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <div id="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Point</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once('dbconfig.php');
                        $query = "UPDATE `disprob1users` SET ".$_POST['query']." WHERE `id`='".$_SESSION['id']."'";
                        mysql_query($query, $conn);
                        $query = "select * from `disprob1users` order by `point` desc";
                        $res=mysql_query($query, $conn);
                        $no=1;
                        while($row=mysql_fetch_array($res)) {
                            echo "<tr>";
                            echo "<th scope=\"row\">".$no++."</th>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['point']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
