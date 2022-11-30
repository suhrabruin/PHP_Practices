<?php

class Todo{
    public $description;
    public $completed;

    public function __construct($description){
        $this->description = $description;
        $this->completed = false;
    }

    public function complete(){
        $this->completed = true;
    }

    public function is_completed(){
        return $this->completed;
    }
}

?>