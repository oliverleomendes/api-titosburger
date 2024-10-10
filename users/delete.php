<?php

require_once("../controller/controllerUsers.php");
require_once("../model/modelUsers.php");

if($_SERVER["REQUEST_METHOD"] == "DELETE") {

    $query = $_SERVER["QUERY_STRING"];
    parse_str($query, $params);

    $id = $params["id"];

    $controllerUsers = new controllerUsers();
    $delete = $controllerUsers->delete($id);

    if($delete) {
        $msg = array("msg" => "User deleted successfully.");
        echo json_encode($msg);
    } else {
        $msg = array("msg" => "Error, User does not deleted.");
        echo json_encode($msg);
    }

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}