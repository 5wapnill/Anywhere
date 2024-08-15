<!DOCTYPE html>

<head>
    <title>Document</title>
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .cal{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1em;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 2em;
        }

    </style>

</head>
<body>

    <div class="main">
        <form action="index.php" class="form" target="_self">
            <div class="cal">
                <input type="number" name="num1" id="num2" class="input num1"></input>
                <select name="operator" id="operator" class="input operator">
                    <option value="Select Operator">Select Operator</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="num2" id="num2" class="input num2"></input>
            </div>
            <button type="submit" class="btn">Calculate</button>
        </form>
    </div>

</body>
<?php

$x = $_GET['num1'];
$operator = $_GET['operator'];
$y = $_GET['num2'];

switch($operator){
    case "+":
        $ans = $x + $y;
        break;
    case "-":
        $ans = $x - $y;
        break;
    case "*":
        $ans = $x * $y;
        break;
    case "/":
        $ans = $x / $y;
        break;
    default:
        $ans = "Select Operator";
        break;
}
echo $ans;

?>



</html>