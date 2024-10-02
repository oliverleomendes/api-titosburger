<?php

include_once("../services/connectionDB.php");

class modelUsers {

    protected $salt = "Tit0s@2024";

    public function save($data) {
        try {
         
            $firstname = htmlspecialchars($data["firstname"], ENT_NOQUOTES);
            $lastname  = htmlspecialchars($data["lastname"], ENT_NOQUOTES);
            //Usuário e E-mail = username
            $username  = htmlspecialchars($data["username"], ENT_NOQUOTES);
            $password  = htmlspecialchars($data["password"], ENT_NOQUOTES);
            $birthday  = htmlspecialchars($data["birthday"], ENT_NOQUOTES);
            $cpf       = filter_var($data["cpf"], FILTER_SANITIZE_NUMBER_INT);
            //Permissao
            $permission = htmlspecialchars($data["permission"], ENT_NOQUOTES);

            //Irá chamar a função de criptografia de senha
            $password_secure = $this->tokenize($password);

            $conn = connectionDB::connect();
            $save = $conn->prepare("INSERT INTO tblUsers VALUES (':firstname',':lastname',':username',':password_secure',':birthday',':cpf',':mail',1,NOW() )");
            $save->bindParam(":firstname", $firstname);
            $save->bindParam(":lastname", $lastname);
            $save->bindParam(":username", $username);
            $save->bindParam(":password_secure", $password_secure);
            $save->bindParam(":birthday", $birthday);
            $save->bindParam(":cpf", $cpf);
            $save->bindParam(":mail", $username);
            $save->execute();

            

        } catch (PDOException $e) {
            return false;
        }
    }

    protected function tokenize($value){
        try {

            $combinedPassword = $value . $this->salt;
         
            return password_hash($combinedPassword, PASSWORD_BCRYPT);

        } catch (\Throwable $th) {
            return false;
        }
    }

    private function searchUserByEmail($username) {
        try {
            
            $conn = connectionDB::connect();
            $search = $conn->prepare("SELECT id_user FROM tblUsers WHERE username = ':username' ");
            $search->bindParam(":username", $username);
            $search->execute();
            $result = $search->fetch(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {
            return false;
        }
    }

}