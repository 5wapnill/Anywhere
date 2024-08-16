<!DOCTYPE html>

<head>
    <title>Document</title>
    <style>

        
        body {
            background-color: #111;
            color: #f8f0ff;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
        }

        .cal {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1em;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 2em;
        }

        .input {
            height: 2.5em;
            width: 12em;
            border-radius: 5px;
            padding: 0.5em;
            text-align: center;
            padding: 3px;
            background-color: #f0f7ff;
            -moz-appearance: textfield;
            outline: none;
            font-size: 1.3em;

        }

        h1 {
            text-align: center;
            font-size: 3em;
        }

        .btn {
            width: 8em;
            height: 2.5em;
            border-radius: 5px;
            padding: 0.5em;
            text-align: center;
            padding: 3px;
            background-color: #f0f7ff;
            font-size: 1.5em;
            font-weight: 700;
        }

        select {
            background-color: #f0f7ff;
        }
    </style>

</head>

<body>
    <h1>Simple Calculator</h1>
    <div class="main">
        <form action="index.php" class="form" method="GET" target="_self">
            <div class="cal">
                <input type="number" name="num1" id="num2" class="input num1" placeholder="Enter first Number" value="<?php if (isset($_GET['num1'])) echo $_GET['num1'];
                                                                                                                        else echo ""; ?>"></input>
                <select name="operator" id="operator" class="input operator">
                    <option value="Select Operator">Select Operator</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="num2" id="num2" class="input num2" placeholder="Enter second Number" value="<?php if (isset($_GET['num2'])) echo $_GET['num2'];
                                                                                                                        else echo ""; ?>" </input>
            </div>
            <button type="submit" class="btn">Calculate</button>
        </form>
    </div>

</body>

<?php

if (isset($_GET['num1']) && isset($_GET['operator']) && isset($_GET['num2'])) {

    $x = (int)$_GET['num1'];
    $operator = $_GET['operator'];
    $y = (int)$_GET['num2'];

    switch ($operator) {
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
    echo "<h1> $x $operator $y = $ans </h1>";
}

?>



</html>