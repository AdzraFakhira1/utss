<?php

    $project_location = "/WisataSumbar";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/index' :
            require "views/index.php";
            break;
        case $me.'/about' :
            require "views/about.php";
            break;
        case $me.'/service' :
            require "views/brand.php";
            break;
        case $me.'/mentawai' :
            require "views/mentawai.php";
            break;
        case $me.'/contact' :
            require "views/contact.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
?>