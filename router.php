<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/home.php',
  '/about' => 'controllers/about.php',
  '/contact' => 'controllers/contact.php',
  '/notes' => 'controllers/notes.php',
  '/note' => 'controllers/note.php'
];

if (!array_key_exists($uri, $routes)) {
  abort(404, 'controllers/_404.php');
}

require $routes[$uri];
