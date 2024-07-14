<?php

// return [
//     "/" => "controllers/home.php",
//     "/about" => "controllers/about.php",
//     "/contact" => "controllers/contact.php",
//     "/notes" => "controllers/notes/index.php",
//     "/notes/create" => "controllers/notes/create.php",
//     "/note" => "controllers/notes/show.php",
// ];

$router->get("/","controllers/home.php");
$router->get("/about","controllers/about.php");
$router->get("/contact","controllers/contact.php");

$router->get("/notes","controllers/notes/index.php");
$router->get("/notes/create","controllers/notes/create.php");
$router->get("/note","controllers/notes/show.php");