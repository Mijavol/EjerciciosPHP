<?php
abstract class figura{    
   public $anc;
   public $alt;
    abstract public function area($anc,$alt);
}

class triangulo extends figura{
  public function area($anc,$alt){
    return print($anc * $alt/2 . "<br>");
  }
}

class rectangulo extends figura{
  public function area($anc,$alt){
    return print($anc * $alt . "<br>");
  }
}

class circulo extends figura{
  public $radio;
  public function area($radio,$PI = 3.1416){
    return print($PI * $radio * $radio);
  }
}
$rectangulo1 = new rectangulo();
$rectangulo1->area(5,9);

$triangulo1 = new triangulo();
$triangulo1->area(5,6);

$circulo1 = new circulo();
$circulo1->area(15);

?>