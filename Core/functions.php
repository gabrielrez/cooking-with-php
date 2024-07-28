<?php

use Core\Response;

function dd($value)
{
  echo "<pre>";
  print_r($value);
  echo "</pre>";
  die();
}

function abort($error = 404)
{
  $path = 'controllers/_' . strval($error) . '.php';
  http_response_code($error);
  require $path;
  die();
}

function routeToController($uri, $routes)
{
  if (!array_key_exists($uri, $routes)) {
    abort(404, 'controllers/_404.php');
  }

  require base_path($routes[$uri]);
}

function authorize($cond, $status = Response::FORBIDDEN)
{
  if (!$cond) {
    abort($status);
  }
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
  extract($attributes);
  require base_path('views/' . $path);
}
