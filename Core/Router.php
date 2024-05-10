<?php

namespace Core;
class Router
{

    protected array $routes = [];

    public function add($uri, $controller, $method): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller): void
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller): void
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller): void
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function patch($uri, $controller): void
    {
        $this->add($uri, $controller, 'PATCH');
    }

    public function put($uri, $controller): void
    {
        $this->add($uri, $controller, 'PUT');
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);

            }
        }

        $this->abort();

    }

        protected function abort($code = 404)
        {
            http_response_code($code);

            require base_path("views/{$code}.php");

            die();
        }


}




