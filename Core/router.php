<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/notes' => 'controllers/notes/index.php',
  '/notes/create' => 'controllers/notes/create.php',
  '/note' => 'controllers/notes/show.php',
  '/contact' => 'controllers/contact.php',
];

if (!array_key_exists($uri, $routes)) {
  abort(404, 'controllers/_404.php');
}

require base_path($routes[$uri]);
