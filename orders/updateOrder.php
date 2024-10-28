<?php

require_once("../controller/controllerOrders.php");
require_once("../model/modelOrders.php");

//echo $_SERVER["REQUEST_METHOD"];

if($_SERVER["REQUEST_METHOD"] == "PUT") {

    $query = $_SERVER["QUERY_STRING"];
    parse_str($query, $params);

    $id = $params["id"];

    $data = json_decode(file_get_contents("php://input"), true);

    $controllerOrders = new controllerOrders();
    $list = $controllerOrders->updateOrder($id, $data);

    $result = array('msg' => "Order created successfully.");
    echo json_encode($result);

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}