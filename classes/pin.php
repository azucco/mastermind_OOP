<?php

class Pin {
    protected $color= "";
    protected $value= "";

    public function getColor(){
        return $this->color;
    }
    public function __construct($color, $value){
        $this->color = $color;
        $this->value = $value;
    }
};

?>