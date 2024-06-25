<?php

function dd($value)
{
  echo "<pre>";
  print_r($value);
  echo "</pre>";
  die();
}

function abort($error, $path)
{
  http_response_code($error);
  require $path;
  die();
}
