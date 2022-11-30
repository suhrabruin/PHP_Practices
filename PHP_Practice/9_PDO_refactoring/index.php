<?php 
require_once '../8_PDO/todo.php';

require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';

$query = new QueryBuilder(Connection::make());

$table_name = 'todos';
$class_name = 'todo';
$todos = $query->fetchAll($table_name,$class_name);



$table_name = 'notices';
//class name is not submitted, by default will be null
$notices = $query->fetchAll($table_name);


require_once 'index.view.php';

?>