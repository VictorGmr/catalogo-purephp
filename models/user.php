<?php
require $_SERVER['DOCUMENT_ROOT']."connection.php";

class User{

    var $nome;
    var $email;
    var $senha;

    function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = md5($senha);
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