<?php
$page_title = "PDO Refactoring";
require_once '../includes/header.php';
?>

<?php require_once '../7_classes/helper.print_todo.php'?>

<?php print_todo($todos);?>



<?php
    echo '<pre>';
    var_dump($notices);
    echo '</pre>';
?>



<?php require_once '../includes/footer.php'; ?>