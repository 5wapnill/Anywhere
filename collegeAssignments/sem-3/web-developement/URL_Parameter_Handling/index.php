<?php

// url : localhost/index.php?name=John&age=25

$name = $_GET['name'];
$age = $_GET['age'];

echo "<p>hello, $name! you are $age years old.</p>";

?>

<head>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height: 100vh;
            background-color: black;
            color: white;
        }

        p{
            font-size: 50px;
        }
    </style>
</head>