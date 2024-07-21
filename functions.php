<?php

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

function authorize($cond, $status = Response::FORBIDDEN)
{
  if (!$cond) {
    abort($status);
  }
}
