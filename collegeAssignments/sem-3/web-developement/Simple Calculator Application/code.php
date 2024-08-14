<?php

$unt_str = $_POST['cal'];

$str = trim($unt_str);


$str_arr = explode( "+" , $str);


foreach ($str_arr as $x) {
    echo $x."<br>";
}

?>