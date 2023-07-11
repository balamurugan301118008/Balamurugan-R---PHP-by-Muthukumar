<?php
require 'connection.php';

class UserModel extends DataBase{

    public function createDb($db){
        $this->db->query("CREATE DATABASE $db");
        header("location:/");
    }
    public function AllDbList(){
       return $allDbs = $this->db->query("SHOW DATABASES")->fetchAll();
    }
    public function createTable($dbName,$tableName){
        $this->db->query("
        USE $dbName;
        CREATE TABLE $tableName(
        id int auto_increment,
        primary key (id)
        )
        ");
    }
    public function createTableAndColumns($dbName,$tableName,$column,$dataTypes)
    {
        $this->db->query("
        USE $dbName;
        ALTER TABLE $tableName ADD COLUMN $column $dataTypes;
        ");
        header("location:/");
    }
    public function useDBAndShowtables(){
        $dbName = $_POST['DB_name'];
        $fetchTables = $this->db->query("
        SELECT TABLE_NAME FROM 
        INFORMATION_SCHEMA.TABLES   
        WHERE TABLE_SCHEMA = '$dbName'
         ");
        $datas = $fetchTables->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }

    public function getColumn(){
        $tableName = $_POST['tableName'];
        $fetchColumns = $this->db->query("
        SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$tableName'
         ");
        $column = $fetchColumns->fetchAll(PDO::FETCH_OBJ);
        return $column;
    }
    public function insertAllValues(){
        var_dump($_POST);
    }
}