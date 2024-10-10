<?php

require_once("../controller/controllerUsers.php");
require_once("../model/modelUsers.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    $controllerUsers = new controllerUsers();
    $genaretToken = $controllerUsers->generateTwoFactor($data);

    if($genaretToken) {
        $msg = array("msg" => "Token was validated.");
        echo json_encode($msg);
    } else {
        $msg = array("msg" => "Error, Token was not validated.");
        echo json_encode($msg);
    }

} else {
    header("HTTP/1.1 405 Method Not Allowed");
}