<?php

abstract class Figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    private $omschrijving;



   public function __construct($Ix, $Iy){
        $this->setX($Ix);
        $this->setY($Iy);

   }

   public function setX($Ix) {
       if (!is_int($Ix)) {
           die("dat is geen nummer");
       }
       $this->x = $Ix;

   }
   public function setY($Iy) {
    if (!is_int($Iy)) {
        die("dat is geen nummer");
    }
    $this->y = $Iy;

}




public function setomschrijving($Iomschrijving) {
       
}
public function getomschrijving($Iomschrijving)  : string {
      
    
   return $een_string;
}

    public abstract function berekenOpervlakte();

}