<?php
  /*het toevoegen van het anderen php bestand
   */
include('album.php');
/*MAAKT EEN NIEUWE ALBUM AAN*/
$instance = new Album('nieuw begin');
echo 'Output = ';
/*hiermee kan je het album zien*/
$instance->displayVar();
?>