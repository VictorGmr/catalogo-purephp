<?php

require $_SERVER['DOCUMENT_ROOT']."connection.php";

class Produto{

    var $nome;
    var $preco;

    function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function insert(){
        $conn = Connection::connect();
        $sql = "INSERT INTO produtos (nome, preco) VALUES ('$this->nome', '$this->preco');";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    public static function update($request){
        $conn = Connection::connect();
        $sql = "UPDATE produtos SET nome = '".$request["nome"]."',  preco = ".$request["preco"]." WHERE id = ".$request["id"].";";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    public static function selectAll(){
        $conn = Connection::connect();
        $sql = "SELECT * FROM produtos;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public static function selectById($id){
        $conn = Connection::connect();
        $sql = "SELECT * FROM produtos WHERE id = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public static function delete($id){
        $conn = Connection::connect();
        $sql = "DELETE FROM produtos WHERE id = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }



}