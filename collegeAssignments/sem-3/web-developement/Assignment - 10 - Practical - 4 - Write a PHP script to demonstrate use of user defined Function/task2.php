<style>
    body{
        background-color: black;
        color: white;
        height: 100vh;
        font-size: larger;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<?php

if (isset($_POST['num1']) && isset($_POST['operator']) && isset($_POST['num2'])) {

    $x = (int)$_POST['num1'];
    $operator = $_POST['operator'];
    $y = (int)$_POST['num2'];

    function add($num1, $num2){
        return $num1 + $num2;
    }
    function sub($num1, $num2){
        return $num1 - $num2;
    }
    function mul($num1, $num2){
        return $num1 * $num2;
    }
    function div($num1, $num2){
        return $num1 / $num2;
    }
    
    switch ($operator) {
        case "+":
            $ans = add($x, $y);
            break;
        case "-":
            $ans = sub($x, $y);
            break;
        case "*":
            $ans = mul($x, $y);
            break;
        case "/":
            $ans = div($x, $y);
            break;
        default:
            $ans = "Select Operator";
            break;
    }
    echo "<h1> $x $operator $y = $ans </h1>";
}

?>