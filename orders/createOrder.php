<?php

require_once("../controller/controllerOrders.php");
require_once("../model/modelOrders.php");

//echo $_SERVER["REQUEST_METHOD"];

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    $controllerOrders = new controllerOrders();
    $list = $controllerOrders->createOrder($data);

    $result = array('msg' => "Order created successfully.");
    echo json_encode($result);

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}