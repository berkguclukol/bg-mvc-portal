<?php

class suppliersmodel
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public function load(){
        $response = [
            "data" => Database::getAll("suppliers")
        ];
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    }
    public function update(){
        $key = str_replace("key=","", file_get_contents("php://input"));
        echo file_get_contents("php://input");

        //Model::query("DELETE FROM customers WHERE CustomerID = '" . $key . "'");
    }







    public function delete(){
        $key = str_replace("key=","", file_get_contents("php://input"));
        Database::delete('employees',"EmployeeID", intval($key));
    }
}