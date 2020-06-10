<?php
// De parent class
abstract class eten {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

//Child classes
class Pizza extends eten {
  public function intro() : string {
    return "Er is niks meer Iteliaans dan $this->name!";
  }
}

class Hambeurger extends eten {
  public function intro() : string {
    return "En $this->name is super amerikaans";
  }
}



// Maakt opjecten van de child classes
$pizza = new pizza("Pizza");
echo $pizza->intro();
echo "<br>";

$Hambeurger = new hambeurger("Hambeurger");
echo $Hambeurger->intro();
echo "<br>";

/*ter informatie ik had best wel honger toen ik dit maakte*/
?>

