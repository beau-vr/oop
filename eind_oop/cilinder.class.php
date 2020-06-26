<?php

class Cilinder extends Figuur{

    public function __construct($Ih, $Ir) {
        parent::__construct($Ih, $Ir);

    }

    public function getH(){
        return $this->y;
    }
    public function getR(){
        return $this->x;
        
    }
    public function berekenOpervlakte(){
    $antwoord = 2 * Figuur::$PI * $this->x * $this->y +  2 * Figuur::$PI * $this->x * $this->x;
    return $antwoord;
}
    
}