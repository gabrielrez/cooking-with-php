<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$notes = $db->query('select * from notes')->getAll();

require "views/notes.view.php";
