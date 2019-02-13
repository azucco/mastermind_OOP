<?php

class Pin {
    protected $symbol = "&#9673";
    protected $color= "";
    protected $value= "";

    public function getColor(){
        return $this->color;
    }
    public function getValue(){
        return $this->value;
    }
    public function __construct($color, $value){
        $this->color = $color;
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->symbol;
    }
};

?>