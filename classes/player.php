<?php

class Player {
    protected $name = "";

    public function getName(){
        return $this->name;
    }
    public function __construct($name){
       $this->name = $name;
    }
};

?>