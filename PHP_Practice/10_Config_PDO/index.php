<?php
$config = require_once 'config.php';
require_once '../8_PDO/todo.php';

require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';



$query = new QueryBuilder(Connection::make($config['database']));

$table = 'todos';
$class = 'todo';
$todos = $query->fetchAll($table,$class);


$table = 'notices';
$notices = $query->fetchAll($table);

?>







<?php require_once 'index.view.php';?>