<?php

class QueryBuilder{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function fetchAll($table,$class_name=null){
        $statement = $this->pdo->prepare("SELECT * FROM `{$table}`");
        $statement->execute();
        // return $statement->fetchAll(PDO::FETCH_OBJ);
        // return $statement->fetchAll(PDO::FETCH_CLASS,$class_name);
        return (is_null($class_name)) ? $statement->fetchAll(PDO::FETCH_CLASS):$statement->fetchAll(PDO::FETCH_CLASS,$class_name);
    }
}