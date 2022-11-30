<?php

$task1 = [
    'title'     =>  'front-end development Assignment#15',
    'due'       =>  '28.10.2022',
    'submit_to' =>  'Mr. Ahmad',
    'is_submit' =>  true,
    'status'    =>  false,
];
$task2 = [
    'title'     =>  'Designing with Figma',
    'due'       =>  '15.11.2022',
    'submit_to' =>  'Mr. Asadullah',
    'is_submit' =>  true,
    'status'    =>  true,
];
$task3 = [
    'title'     =>  'PHP Practice for Beginner',
    'due'       =>  '27.11.2022',
    'submit_to' =>  'Mr. Ali',
    'is_submit' =>  false,
    'status'    =>  true,
];
$task4 = [
    'title'     =>  'Prepare to assignments',
    'due'       =>  '03.12.2022',
    'submit_to' =>  null,
    'is_submit' =>  false,
    'status'    =>  false,
];

$tasks = [$task1,$task2,$task3,$task4];
?>

<?php
$page_title = "Conditions";
require_once '../includes/header.php';
?>




<table>
<thead>
<th>#</th>
<th>Title</th>
<th>Due</th>
<th>Submit To</th>
<th>Is Done</th>
</thead>

<?php
for($i=0; $i<count($tasks); $i++){

    echo "<tr>";
    echo "<td>{$i}</td>";
    echo "<td> {$tasks[$i]['title']}</td>";
    echo "<td> {$tasks[$i]['due']}</td>";
    if(!is_null($tasks[$i]['submit_to'])){
        echo "<td> {$tasks[$i]['submit_to']}</td>";
    }else{
        echo "<td>n/a</td>";
    }

    echo ($tasks[$i]['is_submit'])? "<td style='color:green;'>Yes</td>":"<td style='color:red;'>No</td>";
    echo "</tr>";
}

?>
</table>






<?php
$season_options = ['spring','summar','autumn','winter'];
$season = $season_options[1];

echo "<strong>$season</strong>";
switch($season){
    case "spring":        
        echo "<p>Rains and Rainbow...Love and Life</p>";
        break;
    case "summar":
        echo "<p>Sleep outside at night and count the stars :)</p>";
        break;
    case "autumn":
        echo "<p>Falling down of yellow leafs are the messangers of leaves</p>";
        break;
    case "winter":
        echo "<p>You may cold! Wear warm</p>";
        break;
    default:
        echo "<p>Unexpected value</p>";
        break;
}
?>






<?php require_once '../includes/footer.php'; ?>