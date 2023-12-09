<?php
/**
 * Установить FastRouter
 * composer require nikic/fast-route
 * 
 */

 require '../vendor/autoload.php';

class hello
{
    function hello()
    {
        echo 'Привет';
    }
    function hello2()
    {
        echo 'Привет 2';
    }
}

 $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/pattern/src/FastRouter.php/', 'hello');
    $r->addRoute('GET', '/pattern/src/FastRouter.php/users', 'hello2');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
// echo "Method: $httpMethod, URI: $uri <br>";

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        $obj = new Hello;
        if ($handler == 'hello')
            $obj->hello();
        if ($handler == 'hello2')
            $obj->hello2();

        // ... call $handler with $vars
        break;
}
