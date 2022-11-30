<?php
$page_title = "Functions";
require_once '../includes/header.php';
?>


<?php
require_once 'helper_functions.php';
$age = 19;
echo evaluate($age)? "You are eligible":"You are not allowed";

echo "<br/>";
$age = 17;
echo is_eligible($age);

echo "<br/>";
$age = 18;
print_eligibility($age);

?>


<?php require_once '../includes/footer.php'; ?>