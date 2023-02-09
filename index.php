<?php
    switch($_SERVER['REQUEST_URI']) {
        case "/":
            require "./public/home.html";
            break;
        case "":
            require "./public/home.html";
            break;
        default:
            http_response_code(404);
            require "./public/error/404.html";
            break; 
    }
?>