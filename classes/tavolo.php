<?php

class Tavolo {
    protected $width= "";
    protected $lenght= "";

    public function getWidth(){
        return $this->width;
    } 
    public function getLenght(){
        return $this->lenght;
    } 
    public function __construct($width, $lenght){
        $this->width = $width;
        $this->lenght = $lenght;
    }
};

?>