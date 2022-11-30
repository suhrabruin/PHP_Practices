<?php
$page_title = "Arrays";
require_once '../includes/header.php';
?>

<h2>Cities</h2>
<ul>
    <?php
        foreach($cities as $city){
            echo "<li>{$city}</li>";
        }
    ?>
</ul>

<h2>Students</h2>
<ol>
    <?php foreach($students as $student): ?>
        <li><?= $student;?></li>
    <?php endforeach;?>
</ol>


<h2>Associative Arrays</h2>
<pre>
    <?php 
        print_r($employees);
    ?>
</pre>



<?php require_once '../includes/footer.php'; ?>