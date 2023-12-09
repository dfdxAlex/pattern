<form>
    <input type="submit" formaction="/pattern/src/FastRouter.php/" value="Home">
    <input type="submit" formaction="/pattern/src/FastRouter.php/about.php" value="About">
    <input type="submit" formaction="/pattern/src/FastRouter.php/contact.php" value="Contact">
    <input type="submit" formaction="/pattern/src/FastRouter.php/messages.php" value="Messages">
</form>

<?php
/**
 * Установить FastRouter
 * composer require nikic/fast-route
 * 
 */

 require '../vendor/autoload.php';

 $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addGroup('/pattern/src/FastRouter.php', function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/', 'home');
        $r->addRoute('GET', '/about.php', 'about');
        $r->addRoute('GET', '/contact.php', 'contact');
        $r->addRoute('GET', '/messages.php', 'messages');
    });
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

        if ($handler == 'home') {
            echo 'Привет, ты перешел на домашнюю страницу';
        }

        if ($handler == 'about') {
            echo 'Привет, ты перешел на страницу О Нас';
        }

        if ($handler == 'contact') {
            echo 'Привет, ты перешел на страницу с контактами';
        }

        if ($handler == 'messages') {
            echo 'Привет, ты можешь оставить своё сообщение тут';
        }

        // ... call $handler with $vars
        break;
}
