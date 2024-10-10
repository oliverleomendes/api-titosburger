<?php

require_once("../controller/controllerUsers.php");
require_once("../model/modelUsers.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    $controllerUsers = new controllerUsers();
    $save = $controllerUsers->save($data);

    if($save) {
        $msg = array("msg" => "User has been created.");
        echo json_encode($msg);
    } else {
        $msg = array("msg" => "Error, User does not created.");
        echo json_encode($msg);
    }

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}