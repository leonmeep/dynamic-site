<?php


$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Note';
$title = 'Note';
$currentUserId = 1;


$note = $db->query('SELECT * FROM notes WHERE  user_id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);





require 'views/notes/index.view.php';


