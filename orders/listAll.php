<?php

require_once("../controller/controllerOrders.php");
require_once("../model/modelOrders.php");

//echo $_SERVER["REQUEST_METHOD"];

if($_SERVER["REQUEST_METHOD"] == "GET") {

    $controllerOrders = new controllerOrders();
    $list = $controllerOrders->listAllOrders();

    $result = array('orders' => $list);
    echo json_encode($result);

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}