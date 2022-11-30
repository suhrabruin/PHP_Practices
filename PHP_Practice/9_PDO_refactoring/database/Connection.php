<?php

class Connection{
    public static function make(){
        $host = 'localhost';
        $dbname = 'todo';
        $username = 'root';
        $password = '';

        try{
            return new PDO("mysql:host={$host};dbname={$dbname}",$username,$password);
        }catch(PDOException $e){        
            echo "<strong style='color:red;'>Something went wrong!</strong><br/>";
            die($e->getMessage());
        }
    }
}