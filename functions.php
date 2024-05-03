<?php

function dd($value) : void

{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}


function urlIs($value) : bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN) : void
{
    if (! $condition) {
        abort($status);
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();

}