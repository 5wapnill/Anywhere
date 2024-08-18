<?php

$page = $_GET['page'];

switch ($page) {
    case "about":
        include "about.html";
        break;
    case "contact":
        include "contact.html";
        break;
    default:
        echo "not_found.html";
}
?>