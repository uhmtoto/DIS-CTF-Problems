<html>
    <head>
        <title>Auth Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <div id="container" style="margin: 350px">
            <h1>
                <?php
                    $y = "9";
                    function inv() {
                        echo "Invalid S/N";
                        exit();
                    }
                    function valid() {
                        echo "FLAG is ????";
                    }
                    $w = "7";
                    if(preg_match('/[^0-9a-z]/')) inv();
                    $key = explode('-', $_GET['key']);
                    if(count($key) != 4) inv();
                    $x = "1";
                    if(substr($key[0], 0, 2) != "sn") inv();
                    if(ord(substr($key[0], 2, 1)) + ord(substr($key[0], 3, 1)) >= ord(substr($key[0], 4, 1))) inv();
                    $w = "1";
                    if(substr($key[0], 1, 1) != substr($key[1], 1, 1)) inv();
                    if(pow((int)substr($key[1], 0, 1), 2) != (int)substr($key[1], 2, 1)) inv();
                    $z = "3";
                    if(!is_numeric(substr($key[2], 0, 1)) || !is_numeric(substr($key[2], 3, 1))
                    || !is_numeric(substr($key[2], 5, 1))) inv();
                    $w = "7";
                    if(is_numeric(substr($key[2], 1, 1)) || is_numeric(substr($key[2], 2, 1)) || is_numeric(substr($key[2], 4, 1))) inv();
                    if(ord(substr($key[2], 0, 1)) + 3 != ord(substr($key[2], 3, 1))) inv();
                    if(ord(substr($key[2], 3, 1)) + 4 != ord(substr($key[2], 5, 1))) inv();
                    if(substr($key[2], 1, 1) != substr($key[2], 2, 1) 
                     || substr($key[2], 2, 1) != substr($key[2], 4, 1)) inv();
                    
                    //4th
                    if($key[3] != $w.$x.$y.$z) inv();

                    valid();
                ?>
            </h1>
        </div>        
    </body>
</html>