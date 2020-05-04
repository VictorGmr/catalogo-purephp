<?php
require $_SERVER['DOCUMENT_ROOT']."connection.php";
session_start();

class User{

    var $nome;
    var $email;
    var $senha;

    function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = md5($senha);
    }

    public static function auth($request){
        $conn = Connection::connect();
        $sql = 'SELECT * FROM users WHERE email = "'.$request["email"].'" AND password = "'.md5($request["senha"]).'";';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $userID = $stmt->fetchAll();

        if(isset($userID[0])){
            $_SESSION["loggedin"] = true;
            $_SESSION["nome"] = $userID[0]["name"];
            return true;
        }else{
            return false;
        }
    }

    public static function logout(){
        if((isset($_SESSION["loggedin"])) && (isset($_SESSION["nome"]))){
            unset($_SESSION["loggedin"]);
            unset($_SESSION["nome"]);
        }
        session_destroy();
    }

    

    public function register(){
        $conn = Connection::connect();
        $sql = "INSERT INTO users (name, email, password) VALUES ('$this->nome','$this->email','$this->senha');";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    public function delete(){

    }

    public function update(){


    }


}