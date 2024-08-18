<?php

$uNum = (int) $_POST['uNum'];
$ranNum = (int) rand(0, 100);



if (isset($uNum, $ranNum)) {
    if ($uNum == $ranNum) {
        echo "you entered $uNum and the random number was $ranNum<br>congrats you guessed the number.";
    } else {
        if ($uNum > $ranNum) {
            if ($uNum - $ranNum < 10) {
                echo "you entered $uNum and the random number was $ranNum<br>You are sooo close ! (within 10 of the number)";
            } else if ($uNum - $ranNum < 20) {
                echo "you entered $uNum and the random number was $ranNum<br>You are close (within 20 of the number.)";
            } else {
                echo "you entered $uNum and the random number was $ranNum<br>You are far from the number.";
            }
        } else if ($uNum < $ranNum) {
            if ($ranNum - $uNum < 10) {
                echo "you entered $uNum and the random number was $ranNum<br>You are sooo close ! (within 10 of the number)";
            } else if ($ranNum - $uNum < 20) {
                echo "you entered $uNum and the random number was $ranNum<br>You are close (within 20 of the number.)";
            } else {
                echo "you entered $uNum and the random number was $ranNum<br>You are far from the number.";
            }
        }
    }
}
?>