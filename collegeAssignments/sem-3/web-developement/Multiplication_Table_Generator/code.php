
<h1>Multiplication Table</h1>

<div class = "cont"><?php

$num = $_GET['num'];

for($i = 1; $i <= 10; $i++)
{
    echo "<p>".$i." x ".$num." = ".$i * $num."<br>"."</p>";
}
?>
</div>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        box-sizing: border-box;
        background-color: black;
        color: #ffc0d7;
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    p {
        font-size: 20px;
    }


</style>