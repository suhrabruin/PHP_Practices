<?php

require_once 'db_connect.php';
require_once 'todo.php';



$pdo = db_connect();

$todos = fetchAll($pdo);


require_once 'index.view.php';

?>