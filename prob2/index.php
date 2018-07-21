<html>
    <head>
        <title>hash</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <div id="container" style="margin: 50px">
            <form method="POST" action="cmp.php">
                <div class="form-group">
                    <label>VALUE 1</label>
                    <input type="text" name="v1" class="form-control" placeholder="VALUE 1">
                </div>
                <div class="form-group">
                    <label>VALUE 2</label>
                    <input type="text" name="v2" class="form-control" placeholder="VALUE 2">
                </div>
                <p><? echo($_GET['text']) ?></p>
                <button type="submit" class="btn btn-primary">COMPARE</button>
            </form>
        </div>    
    </body>
</html>