<?php

use Symfony\Component\HttpFoundation\Request;

setlocale(LC_TIME, 'pl_PL');

require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../app/bootstrap.php.cache';


$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('track_errors', 1);
// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
try {
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);
} catch (Exception $exception) {
//    dump($exception);
}
