<!DOCTYPE html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>

<body>
<?php


?>
    <div id="page1">
        <form method="GET">
            <input type="text" name="cal" id="cal">
            <input type="submit" value="calculate">

            <label for="cal">result = </label> <?php echo $x = " "?>
        </form>
    </div>
</body>

</html>
<?php 

if (isset($_GET['cal'])) {

    cal();

function cal(){
    $unt_str = $_GET['cal'];

$str = trim($unt_str);


$str_arr = explode( "+" , $str);


foreach ($str_arr as $x) {
    echo $x."<br>";
}



}
}

?>