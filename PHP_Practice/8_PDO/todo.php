<?php

class Todo{
    public $description;
    public $completed;

  
    // public function __construct($description,$completed){
    //     $this->description = $description;
    //     $this->completed = $completed;
    // }

    public function complete(){
        $this->completed = true;
    }

    public function is_completed(){
        return $this->completed;
    }
}

?>