<?php

if (isset($_GET["page"])) {
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
            include 'pages/404.php';
            break;
    }
} else {
    switch ($_SERVER['REQUEST_URI']) {
        case '/chat':
            include 'pages/chat.php';
            break;
        case '/chien':
            include 'pages/chien.php';
            break;
        case '/tortue':
            include 'pages/tortue.php';
            break;
        default:
            include 'pages/home.php';
            break;
    }
}

