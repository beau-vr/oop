<?php

class Album
  /*het aanmaken van de class
   */
{
 
   public $album, $tijd;
    /*het maken van de constructor,
     en de parameters opzetten
   */
   public function __construct ($Nummers, $lengte) {
       $this->album = $Nummers;
       $this->tijd = $lengte;
   }
     /*de functie makn waardoor de informatie op het scherm kan komen
   */
   public function displayVar() {
       echo $this->album;
   }
}
?>