<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/home.php',
  '/about' => 'controllers/about.php',
  '/contact' => 'controllers/contact.php',
];

if (!array_key_exists($uri, $routes)) {
  http_response_code(404);
  require 'controllers/_404.php';
  die();
}

require $routes[$uri];
