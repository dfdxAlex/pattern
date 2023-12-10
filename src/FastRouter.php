<form>
    <input type="submit" formaction="/pattern/src/FastRouter.php/" value="Home">
    <input type="submit" formaction="/pattern/src/FastRouter.php/about.php/aaa" value="About">
    <input type="submit" formaction="/pattern/src/FastRouter.php/contact.php" value="Contact">
    <input type="submit" formaction="/pattern/src/FastRouter.php/messages.php" value="Messages">
</form>

<?php

define('IS_DEBUG_ENABLED', true);

class Test
{
    public function test1()
    {
        return 'Возврат test1';
    }
    public function test2()
    {
        return 'Возврат test2';
    }
}

/**
 * Установить FastRouter
 * composer require nikic/fast-route
 * 
 */

 require '../vendor/autoload.php';

 $dispatcher = FastRoute\cachedDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addGroup('/pattern/src/FastRouter.php', function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/', 'Test@test2');
        $r->addRoute('GET', '/about.php/{name}', 'about');
        $r->addRoute('GET', '/contact.php', 'contact');
        $r->addRoute('GET', '/messages.php', 'messages');
    });
}, [
    'cacheFile' => __DIR__ . '/route.cache', /* required */
    'cacheDisabled' => IS_DEBUG_ENABLED,     /* optional, enabled by default */
]);

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


        $mas = explode('@',$handler);
        if ($mas[0] == 'Test') {
            $aaa = new $mas[0];
            $methode = $mas[1];
            echo 'Обработка контроллером Test---'.$aaa->$methode(); 
        }

        if ($handler == 'home') {
            echo 'Привет, ты перешел на домашнюю страницу';
        }

        if ($handler == 'home2') {
            echo 'Путь из кеша';
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
