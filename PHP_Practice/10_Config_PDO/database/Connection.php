<?php


class Connection{
    public static function make($config){
        try{
            // return new PDO("mysql:host=localhost;dbname=todo",$config['username'],$config['password']);
            return new PDO("{$config['connection']};dbname={$config['dbname']}",$config['username'],$config['password']);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}