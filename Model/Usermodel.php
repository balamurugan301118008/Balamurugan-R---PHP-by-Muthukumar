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
//        print_r($dbName);
//        echo '\n';
//        print_r($tableName);
//        print_r($column);
//        print_r($dataTypes);




//        header("location:/");
////        $dbName = $_POST['DB_name'];
////        $tableName=  $_POST['table_name'];
////        $columnOne= $_POST['columnName'][0];
////        $columnTwo= $_POST['columnName'][1];
////        $columnThree= $_POST['columnName'][2];
////        $columnFour= $_POST['columnName'][3];
////        $columnFive= $_POST['columnName'][4];
////        $columnSix= $_POST['columnName'][5];
////        $sql = "use $dbName; CREATE TABLE $tableName (
//        id int not null AUTO_INCREMENT,
//        $columnOne varchar (255),
//        $columnTwo varchar(255),
//        $columnThree varchar(255),
//        $columnFour varchar(255),
//        $columnFive varchar(255),
//        $columnSix varchar(255),
//         primary key(id)
//        )";


//        }
//        public function insertColumns(){
//            $sql = "use $dbName; CREATE TABLE $tableName (
//                $column $dataTypes
//                )";
//            $this->db->query($sql);
//        }
}