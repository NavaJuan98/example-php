<?php

namespace Core;

class Router
{

    protected $routes = [];

    protected function add($method, $uri, $controller)
    {
        $this->routes[] = compact("method", "uri", "controller");
    }

    public function get($uri, $controller)
    {
        $this->add("GET", $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add("POST", $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add("DELETE", $uri, $controller);
    }

    public function put($uri, $controller)
    {
        $this->add("PUT", $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add("PUT", $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route["method"] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    protected function abort($code = 404)
    {
        if (file_exists(base_path("views/partials/errors/$code.view.php"))) {
            http_response_code($code);
            require base_path("views/partials/errors/$code.view.php");
        }
        exit();
    }
}