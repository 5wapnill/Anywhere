<?php

$name = $_POST["name"];
$s1 = $_POST["Comp"];
$s2 = $_POST["C"];
$s3 = $_POST["Acc"];
$s4 = $_POST["Web"];

$total = $s1 + $s2 + $s3 + $s4;
$percentage = ($total / 400) * 100;


if ($percentage >= 80) {
    $grade = " A+";
} elseif ($percentage >= 60) {
    $grade = " A";
} elseif ($percentage >= 50) {
    $grade = " B";
} elseif ($percentage >= 40) {
    $grade = " C";
} else {
    $grade = " F";
}

?>

<!DOCTYPE html>

<head>
    <title>Grade</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            color:rgb(255, 245, 245);
        }
        h1{
            font-size: 3em;
            text-align: center;
            margin-bottom: 1em;
            color: lightcyan;
        }
        table td{
            font-size: 2em;
            padding: 1em;
            
        }


    </style>
</head>

<body>
    <div class="main">
        <h1>Grade</h1>
        <table >
            <tr>
                <td>hello, <?php echo $name ?></td>
            </tr>
            <tr>
                <td>Total Marks: </td>
                <td><?php echo $total ?></td>
            </tr>    
            <tr>
                <td>Percentage: </td>
                <td><?php echo "$percentage%" ?></td>
            </tr>    
            <tr>
                <td>Grade: </td>
                <td><?php echo $grade ?></td>
            </tr>    
        </table>
    </div>
</body>

</html>