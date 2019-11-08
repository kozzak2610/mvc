<?php
require './../vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
   require __DIR__ . './page/home.php';
});
$klein->respond('GET', '/about', function () {
    require __DIR__ . './page/about.php';
});
$klein->respond('GET', '/user', function () {
    require __DIR__ . './page/user.php';
});
$klein->onHttpError(function ($code, $router) {
    if ($code >= 400 && $code < 500) {
        require __DIR__ . './page/404.php';
    } elseif ($code >= 500 && $code <= 599) {
        error_log('uhhh, something bad happened');
    }
});
$klein->dispatch();
//require './../vendor/autoload.php';
//
//$request = $_SERVER['REQUEST_URI'];
//
//switch ($request) {
//    case '/' :
//        require __DIR__ . './page/home.php';
//        break;
//    case '/about' :
//        require __DIR__ . './page/about.php';
//        break;
//    case '/user' :
//        require __DIR__ . './page/user.php';
//        break;
//    default:
//        http_response_code(404);
//        require __DIR__ . './page/404.php';
//        break;
//}