<?php

function db_connect(){
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


function fetchAll($pdo){
   
    // $statement = $pdo->prepare('select * from `todos`');
    $statement = $pdo->prepare('select `id`, `description`,`completed` from `todos`');

    $statement->execute();
    //fetch as object
    // $obj = $statement->fetchAll(PDO::FETCH_OBJ);

    //fetch as class Todo object
    $obj =  $statement->fetchAll(PDO::FETCH_CLASS, 'Todo');
    
    return $obj;
} 