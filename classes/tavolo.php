<?php

class Tavolo {
    protected $width= "";
    protected $lenght= "";
    protected $set = "";

    public function getWidth(){
        return $this->width;
    } 
    public function getLenght(){
        return $this->lenght;
    }
    public function getCombo() :array {
        shuffle($this->set);
        return $this->set;
    }
    public function __construct($width, $lenght, array $set){
        $this->width = $width;
        $this->lenght = $lenght;
        $this->set = $set;
    }
};

?>