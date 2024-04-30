<?php

$heading = 'Home Page';

function dd()

{
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    die();
}




require 'views/index.vew.php';



