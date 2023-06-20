<?php

class productsmodel
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public function load(){
        $response = [
            "data" => Database::execAll("SELECT ProductID, ProductName, SupplierName, Unit, Price, CategoryName FROM products AS p INNER JOIN suppliers AS s ON p.SupplierID = s.SupplierID INNER JOIN categories AS c ON p.CategoryID = c.CategoryID")
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
        Database::delete('products',"ProductID", intval($key));
    }
}