<?php

require_once("../controller/controllerOrders.php");
require_once("../model/modelOrders.php");

//echo $_SERVER["REQUEST_METHOD"];

if($_SERVER["REQUEST_METHOD"] == "DELETE") {

    $id = $_GET["id"];

    $controllerOrders = new controllerOrders();
    $list = $controllerOrders->deleteCart($id);

    $result = array('msg' => "Cart deleted successfully.");
    echo json_encode($result);

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}