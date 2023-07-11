<?php


class Database
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO
            (
                'mysql:host=127.0.0.1',
                'admin',
                'welcome'
            );
        } catch (Exception $e) {
            echo "Connection errors :" . $e->getMessage();
        }
    }
}
