<?php

use Core\Response;

function requestUrl($url)
{
    $requested = parse_url($_SERVER["REQUEST_URI"])["path"];
    return $requested === $url;
}

function dd($data)
{
    echo "<pre>";
    echo var_dump($data);
    echo "<pre>";

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/{$path}");
}

function abort($code = 404)
{
    if (file_exists(base_path("views/partials/errors/$code.view.php"))) {
        http_response_code($code);
        require base_path("views/partials/errors/$code.view.php");
    }
    exit();
}