<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';
$notes = $db->query('select * from notes where user_id = 1')->getAll();

view('notes/index.view.php', [
  'heading' => $heading,
  'notes' => $notes,
]);
