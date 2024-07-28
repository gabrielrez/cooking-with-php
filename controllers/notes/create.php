<?php

use Core\Database;
use Core\Validator;

require base_path('core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = 'Note Create';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'A body of no more than 100 character is required';
  }

  if (empty($errors)) {
    $db->query('insert into notes(body, user_id) values (:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 1
    ]);
  }
}

view('notes/create.view.php', [
  'heading' => $heading,
  'errors' => $errors,
]);
