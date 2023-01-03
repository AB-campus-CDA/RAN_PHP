<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/page_un':
        include 'pages/chat.php';
        break;
    case '/page_deux':
        include 'pages/page_deux.php';
        break;
    case '/page_trois':
        include 'pages/page_trois.php';
        break;
    default:
        include 'pages/home.php';
        break;
}