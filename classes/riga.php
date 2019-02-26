<?php

class Riga {
    protected $width= "";
    protected $lenght= "";
    protected $set = "";
    protected $try = "";

    public function getClue(){

    }

    public function __construct($width, $lenght, array $set, array $try){
        $this->width = $width;
        $this->lenght = $lenght;
        $this->set = $set;
        $this->try = $try;
    }
};

?>