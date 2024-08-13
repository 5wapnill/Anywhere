<?php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == "admin" && $password == "admin123") {
    include "demo.html";
} else {
    echo "Invalid Credentials";
}


?>
