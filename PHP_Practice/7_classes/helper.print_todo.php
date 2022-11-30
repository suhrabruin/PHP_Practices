<?php
function print_todo($todos){
    echo "<ul>";
    foreach($todos as $todo){
        echo "<li>";    
        if($todo->is_completed()):
            echo "<strike>{$todo->description}</strike>";
        else:
            echo "{$todo->description}";
        endif;
        echo "</li>";
    }
    echo "</ul>";

} 
?>