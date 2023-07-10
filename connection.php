<?php

class DataBase{
    public $db;
    public function __construct()
    {
        try{
            $this->db= new PDO('mysql:host=localhost','admin','welcome');
        }
        catch (exception $e){;
            die("connnection error".$e->getMessage());
        }
    }
}