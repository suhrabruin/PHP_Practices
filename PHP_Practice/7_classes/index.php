<?php require_once 'todo.php';?>

<?php
// $todo = new Todo("Learn PHP");
// var_dump($todo);
// $todo->complete();
// var_dump($todo);

$todo1 = new Todo("Complete the scrimba exercises");
$todo2 = new Todo("Read the lastly printed book in next two weeks");
$todo3 = new Todo("visit your friend this weekend");
$todo4 = new Todo("Buy a charger for your phone");

$todo2->complete();
$todos = [$todo1, $todo2, $todo3, $todo4];
$todos[2]->complete();



$mytodos =[
    new Todo("Complete the scrimba exercises"),
    new Todo("Read the lastly printed book in next two weeks"),
    new Todo("visit your friend this weekend"),
    new Todo("Buy a charger for your phone")
];

$mytodos[3]->complete();

?>

<?php require_once 'index.view.php';