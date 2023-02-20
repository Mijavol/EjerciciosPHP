<?php
class figura{ //clase padre
  protected $ancho;
  protected $alto;
  protected $resultado;

  public function __construct($anc,$alt)
  {
    $this->ancho = $anc;
    $this->alto = $alt;
  }

  public function resultado()
  {
    echo $this->resultado . "<br>";
  }
}
//clase hija
class rectangulo extends figura{
  public function __construct($anc, $alt){
    figura::__construct($anc,$alt);
  }

  //metodos clase
  public function area()
  {
    $this->resultado = $this->ancho * $this->alto;
    echo "El area del rectangulo es: </n>";
  }
}
//clase hija
class triangulo extends figura{
  public function __construct($anc, $alt){
    figura::__construct($anc,$alt);
  }
  //metodos de clase
  public function area()
  {
    $this->resultado = $this->ancho * $this->alto/2;
    echo "El area del triangulo es: </n>";
  }
  
}

$rectangulo1 = new rectangulo(5,6);
$rectangulo1->area();
$rectangulo1->resultado();
$triangulo1 = new triangulo(12,15);
$triangulo1->area();
$triangulo1->resultado();













?>