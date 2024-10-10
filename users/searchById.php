<?php

require_once("../controller/controllerUsers.php");
require_once("../model/modelUsers.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = $_GET["id"];

    $controllerUsers = new controllerUsers();
    $search = $controllerUsers->searchById($id);

    if($search) {
        $msg = array("users" => $search);
        echo json_encode($msg);
    } else {
        $msg = array("users" => [], "msg" => "Not exists result for ID.");
        echo json_encode($msg);
    }

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}