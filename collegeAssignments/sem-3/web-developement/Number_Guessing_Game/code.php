<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(0, 0, 0);
        color: rgb(120, 120, 120);
        padding: 50px;
        font-size: 3em;
        height: 80%;
    }

    span {
        color: rgb(255, 225, 225);
    }
</style>

<?php

$uNum = (int) $_POST['uNum'];
$ranNum = (int) rand(0, 100);


if (isset($uNum, $ranNum)) {
    if ($uNum == $ranNum) {
        echo "<div>you entered <span>$uNum</span> and the random number was <span>$ranNum</span><br>congrats you guessed the number.</div>";
    } else {
        if ($uNum > $ranNum) {
            if ($uNum - $ranNum < 10) {
                echo "<div>you entered <span>$uNum</span> and the random number was <span>$ranNum</span><br>You are sooo close ! (within 10 of the number)</div>";
            } else if ($uNum - $ranNum < 20) {
                echo "<div>you entered <span>$uNum</span> and the random number was <span>$ranNum</span><br>You are close (within 20 of the number.)</div>";
            } else {
                echo "<div>you entered <span>$uNum</span> and the random number was <span>$ranNum</span><br>You are far from the number.<br> Better luck next time</div>";
            }
        } else if ($uNum < $ranNum) {
            if ($ranNum - $uNum < 10) {
                echo "<div>you entered <span>$uNum</span> and the random number was <span>$ranNum</span><br>You are sooo close ! (within 10 of the number)</div>";
            } else if ($ranNum - $uNum < 20) {
                echo "<div>you entered <span>$uNum</span> and the random number was <span>$ranNum</span><br>You are close (within 20 of the number.)</div>";
            } else {
                echo "<div>you entered <span>$uNum</span> and the random number was <span>$ranNum</span><br>You are far from the number.<br> Better luck next time</div>";
            }
        }
    }
}
?>