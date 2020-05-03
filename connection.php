<?php

class Connection {

    public $conn;

    public static function connect(){
        try { 
            $conn = new PDO('mysql:host=localhost;dbname=catalogo', 'victor', 'victor');
        }catch(PDOException $e){
            echo $e;
        }

        return $conn;
    }
    
}
