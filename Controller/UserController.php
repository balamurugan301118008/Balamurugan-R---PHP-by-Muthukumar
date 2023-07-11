<?php

require 'Model/Usermodel.php';

class UserController
{
    public $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }
    public function form(){
        require 'View/view.home.php';
    }
    public function dbform(){
        require 'View/view.databaseForm.php';
    }
    public function createDataBase($db){
        $this->usermodel->createDb($db);
    }
    public function createTables(){
        $allDBList = $this->usermodel->AllDbList();
        require 'View/view.createTables.php';
    }
    public function addTableAndColumns($getData){
        print_r($getData);
        $dbName = $getData['DB_name'];
        $tableName = $getData['table_name'];
        $this->usermodel->createTable($dbName,$tableName);
        $count = count($getData['columnName']);
        for($i=0;$i<$count;$i++){
            $this->usermodel->createTableAndColumns($dbName,$tableName,$getData['columnName'][$i],$getData['dataType'][$i]);
        }
    }
    public function InsertRows(){
        require 'View/view.InsertRow.php';
    }
}


//$servername = "localhost";
//$username = "your_username";
//$password = "your_password";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//
//$sql = "CREATE DATABASE your_database_name";
//
//if ($conn->query($sql) === true) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . $conn->error;
//}
//
//
//$conn->close();

