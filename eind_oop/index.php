<?php

require_once ('figuur.class.php');
require_once ('cilinder.class.php');
require_once ('vierkant.class.php');


//echo figuur::$PI;

$mijn_cilinder = new Cilinder(10, 5);


echo $mijn_cilinder->berekenOpervlakte();

$mijn_vierkant = new Vierkant(10, 10);

echo $mijn_vierkant->berekenOpervlakte();