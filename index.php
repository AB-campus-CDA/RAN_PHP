<?php

/*
switch ($_SERVER['REQUEST_URI']) {
    case '/page_un':
        include 'pages/chat.php';
        break;
    case '/page_deux':
        include 'pages/chien.php';
        break;
    case '/page_trois':
        include 'pages/tortue.php';
        break;
    default:
        include 'pages/home.php';
        break;
}
*/

switch ($_GET["page"]) {
    case 'chat':
        include 'pages/chat.php';
        break;
    case 'chien':
        include 'pages/chien.php';
        break;
    case 'tortue':
        include 'pages/tortue.php';
        break;
    default:
        include 'pages/home.php';
        break;
}