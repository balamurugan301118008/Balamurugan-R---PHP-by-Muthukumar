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
    public function createTableAndColumns(){
        $dbName = $_POST['DB_name'];
        $tableName=  $_POST['table_name'];
        $columnOne= $_POST['columnName'][0];
        $columnTwo= $_POST['columnName'][1];
        $columnThree= $_POST['columnName'][2];
        $columnFour= $_POST['columnName'][3];
        $columnFive= $_POST['columnName'][4];
        $columnSix= $_POST['columnName'][5];
        $sql = "use $dbName; CREATE TABLE $tableName (
        id int not null AUTO_INCREMENT,
        $columnOne varchar (255),
        $columnTwo varchar(255),
        $columnThree varchar(255),
        $columnFour varchar(255),
        $columnFive varchar(255),
        $columnSix varchar(255),
         primary key(id)
        )";
        $this->db->query($sql);


        $showTables = $this->db->query("SHOW TABLES from $dbName");
        $tables = $showTables->fetchAll(PDO::FETCH_OBJ);
        var_dump($tables);
//        header("location:/");
        }
}