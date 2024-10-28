<?php

require_once("../controller/controllerOrders.php");
require_once("../model/modelOrders.php");

//echo $_SERVER["REQUEST_METHOD"];

if($_SERVER["REQUEST_METHOD"] == "GET") {

    $id_status = $_GET["id_status"];

    $controllerOrders = new controllerOrders();
    $list = $controllerOrders->listOrdersByStatus($id_status);

    $result = array('orders' => $list);
    echo json_encode($result);

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}