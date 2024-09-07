<?php
    $num = $_GET['num'];
    $prime = 1;

    if($num < 4)
    {
        $prime = 1;
    }
    else
    {
        for($i = 2; $i <= $num - 1; $i++)
        {
            if($num % $i == 0)
            {
                $prime = 0;
                break;
            }
        }
    }

    if($prime == 1) echo "$num  =  prime number";
    else echo "$num  ≠  prime number";
?>
