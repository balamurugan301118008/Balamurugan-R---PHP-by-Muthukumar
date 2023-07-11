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
        $dbName = $getData['DB_name'];
        $tableName = $getData['table_name'];
        $this->usermodel->createTable($dbName,$tableName);
        $count = count($getData['columnName']);
        for($i=0;$i<$count;$i++){
            $this->usermodel->createTableAndColumns($dbName,$tableName,$getData['columnName'][$i],$getData['dataType'][$i]);
        }
    }
    public function InsertRowsForm(){
        $allDBList = $this->usermodel->AllDbList();
        require 'View/view.InsertRow.php';
    }
    public function getDb(){
        $allDBList = $this->usermodel->AllDbList();
        $Alltables = $this->usermodel->useDBAndShowtables();
        require 'View/view.InsertRow.php';
    }
    public function getColumns(){

        $columnName=  $this->usermodel->getColumn();
        $allDBList = $this->usermodel->AllDbList();
        $Alltables = $this->usermodel->useDBAndShowtables();
        require 'View/view.InsertRow.php';
    }
    public function insertValues(){
        $insertValues = $this->usermodel->insertAllValues();
    }
}
