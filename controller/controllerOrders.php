<?php

class controllerOrders {

    public function listOrderByClient($id_user){
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->listOrderByClient($id_user);
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function createOrder($data) {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->createOrder($data);
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function updateOrder($id, $data) {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->updateOrder($id, $data);
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function detailOrderById($id) {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->detailOrderById($id);
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function listAllOrders() {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->listAllOrders();
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function listOrdersByStatus($id_status) {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->listOrdersByStatus($id_status);
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function createCart($data) {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->createCart($data);

        } catch (PDOException $e) {
            return false;
        }
    }

    public function insertItenCart($data) {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->insertItenCart($data);
            
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deleteCart($id_cart) {
        try {
         
            $modelOrders = new modelOrders();
            return $modelOrders->deleteCart($id_cart);
            
        } catch (PDOException $e) {
            return false;
        }
    }
}