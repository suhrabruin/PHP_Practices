<?php
$page_title = "Classes";
require_once '../includes/header.php';
?>
<?php require_once 'helper.print_todo.php'?>


<h2>To Do List</h2>
<?php print_todo($todos);?>

<br/>
<h2>My To Do List</h2>
<?php print_todo($mytodos);?>


<?php require_once '../includes/footer.php'; ?>