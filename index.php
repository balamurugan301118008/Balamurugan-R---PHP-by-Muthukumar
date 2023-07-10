<?php
require_once 'router.php';
//
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$router = new router();
$router->get('/', 'form');
$router->get('/addDatabase','addDataBase');
$router->post('/creatDataBase','createDataBase');
$router->get('/addTables','addTables');
$router->post('/addTableAndColumn','addTableAndColumns');
$router->post('/addRows','addRows');
$router->routes($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);