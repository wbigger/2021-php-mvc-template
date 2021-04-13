<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Routing
 */
$router = new Core\Router();

$router->add('/', ['controller' => 'Home', 'action' => 'index']);

$router->add('/login', ['controller' => 'Home', 'action' => 'login']);

$router->add('/marconi', ['controller' => 'School', 'action' => 'index']);

$router->add('/poi', ['controller' => 'PoiController', 'action' => 'index']);

$router->add('/data', ['controller' => 'PoiController', 'action' => 'data']);

// Dispatch generico (ma richiede gli slash all'inizio della rotta)
$router->dispatch($_SERVER['REQUEST_URI']);


// Questo è il dispatch originale ma funziona solo se si specifica una query string
// Se query string non è definita, inizializziamola a vuota
// altrimenti php restituisce errore quando si prova
// ad accedere senza query
// if(!isset($_SERVER['QUERY_STRING'])) {
//     $_SERVER['QUERY_STRING'] = '';
// }
//$router->dispatch($_SERVER['QUERY_STRING']);



