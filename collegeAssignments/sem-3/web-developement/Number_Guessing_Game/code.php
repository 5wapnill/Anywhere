<?php 

$uNum = (int) $_POST['uNum'];
$ranNum = (int) rand(0, 100);

if (isset($uNum,$ranNum))
{
    if ($uNum > $ranNum) {
        if ($uNum - $ranNum < 10) {
            echo "You are within 10 of the number.";
        } else if ($uNum - $ranNum < 20) {
            echo "You are within 20 of the number.";
        } else {
            echo "You are far from the number.";
        }
    } else if ($uNum < $ranNum) {
        if ($ranNum - $uNum < 10) {
            echo "You are within 10 of the number.";
        } else if ($ranNum - $uNum < 20) {
            echo "You are within 20 of the number.";
        } else {
            echo "You are far from the number.";
        }
    }
}

?>