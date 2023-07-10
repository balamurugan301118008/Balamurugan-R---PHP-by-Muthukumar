<?php
require_once 'Controller/UserController.php';
class router
{
    public $route = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();
    }

    public function get($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }
    public  function routes($uri,$method)
    {
        foreach ($this->route as $routes) {
            if ($routes['uri'] === $uri && $routes['method'] === $method) {
                $action = $routes['action'];
                switch ($action) {
                case 'form':
                $this->controller->form();
                break;
                case 'addDataBase':
                $this->controller->dbform();
                break;
                case 'createDataBase':
                $this->controller->createDataBase($_POST['database_name']);
                break;
                case 'addTables':
                $this->controller->createTables();
                break;
                case 'addTableAndColumns':
                $this->controller->addTableAndColumns();
                break;
                    case 'addRows':
                    $this->controller->InsertRows();
                }
            }

        }
    }
}