<!DOCTYPE html>
<head>
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
            color: #ffc0d7;
        }
        div{
            font-size: 5em;
        }
    </style>
</head>
<body>
        
</body>
</html>

<?php

$username = trim(strtolower($_POST['username']));
$password = trim(strtolower($_POST['password']));

if ($username == "admin" && $password == "admin123") {
    echo "<div>Welcome, $username !</div>";
} else {
    echo "<div>Invalid credentials. Please try again.</div>";
}

?>
