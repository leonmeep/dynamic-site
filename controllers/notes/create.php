<?php


$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';

    }
}



view("notes/create.view.php", [
    'heading' => 'Create Note',
    'title' => 'Create Note',
    'errors' => $errors
]);

