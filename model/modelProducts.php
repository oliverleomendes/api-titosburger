<?php

class modelProducts {

    //Criar um novo produto
    public function save($data) {
        try {

            $product_name = htmlspecialchars($data["product_name"], ENT_NOQUOTES);
            $image = htmlspecialchars($data["image"], ENT_NOQUOTES);
            $price = filter_var($data["price"], FILTER_SANITIZE_NUMBER_FLOAT);
            $description = htmlspecialchars($data["description"], ENT_NOQUOTES);
            $id_category = filter_var($data["id_category"], FILTER_SANITIZE_NUMBER_INT);
            $id_status = filter_var($data["id_status"], FILTER_SANITIZE_NUMBER_INT);

            $conn = connectionDB::connect();
            $save = $conn->prepare("INSERT INTO tblProducts (product_name, image, price, description, id_category, id_status, created_at)");

        } catch (PDOException $e) {
            return false;
        }
    }
}