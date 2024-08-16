<!DOCTYPE html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>

<body>
    <div id="page1">
        <form action="#" method="GET" target="_self">
            <input type="text" name="cal" id="cal">
            <input type="submit" value="calculate"><br>
            <label for="cal">result = </label> <?= $x = " " ?>
        </form>
    </div>
</body>

</html>

<?php

//all the functions
function add($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mult($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    if($b != 0)
    {
        return $a / $b;
    }
    else
    {
        return "can't divide by zero";
    }
}

if (isset($_GET['cal'])) {

    cal();
}
function cal()
{

    $str = trim($_GET['cal']); //getting the value

    //splitting the string start
    function split_string($arr)
    {
        $num = preg_split('/[^\w\s]/', $arr);
        return $num;
    }
    $num = split_string($str);

    for ($i = 0; $i < sizeof($num); $i++) {
        $num[$i] = trim($num[$i]);
    }

    print_r($num);  

    //splitting the string end

    echo "<br>";

    //splitting the operator start
    function split_operator($opp)
    {
        $arr = preg_split('/\w/', $opp);
        return $arr;
    }

    $opp = split_operator($str);
    // print_r($opp);
    //splitting the operator end

    //calculation start

    echo count($num);
    echo "<br>";

    $x = 0;
    $y = 0;

    for($i = 0; $i < count($num)-1; $i++)
    {
        if($opp[$i] != " ")
        {
            switch ($opp[$i]) {
                case "+":
                    $x = add($num[$i], $num[$i]+1);
                    break;
                case "-":
                    $x = sub($num[$i], $num[$i]+1);
                    break;
                case "*":
                    $x = mult($num[$i], $num[$i]+1);
                    break;
                case "/":
                    $x = div($num[$i], $num[$i]+1);
                    break;
                default:
                    break;
            }
        }

        $y = $x;
        echo $y;

    }

 
    //calculation end


}

// cal();

?>