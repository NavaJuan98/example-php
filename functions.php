<?php

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
