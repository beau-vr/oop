<?php

class Vierkant extends Figuur {

    public function __construct($Ix, $Iy) {
        parent::__construct($Ix, $Iy);

    }

    
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    function berekenOpervlakte(){

        $antwoord = $this->x * $this->y;
        
        echo $antwoord;
    
    }
       
}