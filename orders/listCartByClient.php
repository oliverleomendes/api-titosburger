<?php

require_once("../controller/controllerOrders.php");
require_once("../model/modelOrders.php");

//echo $_SERVER["REQUEST_METHOD"];

if($_SERVER["REQUEST_METHOD"] == "GET") {

    $id_user = $_GET["id_user"];

    $controllerOrders = new controllerOrders();
    $list = $controllerOrders->listCartByClient($id_user);

    $result = array('orders' => $list);
    echo json_encode($result);

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}