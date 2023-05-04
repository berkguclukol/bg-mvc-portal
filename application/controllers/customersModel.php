<?php

class customersModel
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public function load(){
        $response = [
            "data" => Model::get('SELECT * FROM customers')
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
        Model::query("DELETE FROM customers WHERE CustomerID = '" . $key . "'");
    }
}