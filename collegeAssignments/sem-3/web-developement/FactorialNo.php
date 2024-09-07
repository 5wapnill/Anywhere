<?php

$num = $_GET['num'];

$fact = 1;

for ($i = 1; $i <= $num; $i++)
{
    $fact = $fact * $i;
}
echo "Factorial of $num is: " . $fact;
?>
