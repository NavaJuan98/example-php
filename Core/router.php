<?php 

use Core\Response;

$routes = require "routes.php";


function abort( $code = 404 ) {
    switch( $code ) {
        case 404:
            http_response_code($code);
            require "views/partials/errors/$code.view.php";
            break;
        case 403:
            http_response_code($code);
            require "views/partials/errors/$code.view.php";
            break;
        default: break;
    }

}

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if ($routes[$uri] == true) {
    require base_path($routes[$uri]);
} else {
    abort(Response::NOT_FOUND);
}

