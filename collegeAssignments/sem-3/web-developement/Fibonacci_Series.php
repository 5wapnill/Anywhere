<?php
    $lev = $_GET['level'];

    $a = 0;
    $b = 1;
    echo "$a $b ";

    for ($i = 2; $i < $lev; $i++) {
        $c = $a + $b;
        echo "$c ";
        $a = $b;
        $b = $c;
    }
?>
