<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.clear{
    clear: both;
    height: 0px;
}
.cell{
    font-family: sans-serif;
    font-size: 10px;
    float: left;
    margin-top: 1px;
    margin-right: 1px;
    padding: 3px;
    height: 10px;
    width: 10px;
    color: #fff;
}
.weight0{
    background-color: #000;
}
.weight1{
    background-color: #f00;
}
.weight2{
    background-color: #ff0;
}
.weight3{
    background-color: #fff;
    color: #000;
}
</style>
</head>
<body>
    <div id="board">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
    function getBoard(){
        $.get('/adigiweb/get_board.php',function(msg){
            $('#board').html(msg);
        });
    }

    setInterval('getBoard()',500);
    </script>
</body>
</html>
