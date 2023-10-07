<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=;port=3334;dbname=4c-jop-wedding", "root", "");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>