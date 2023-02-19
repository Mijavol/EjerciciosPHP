<?php
class Empleado{

    private $nombre;
    private $sueldo;

    public function inicializar($nom, $sue)
    {
        $this->nombre = $nom;
        $this->sueldo = $sue;
    }
        public function imprimir()
        {
        if($this->sueldo > 6000){
            echo $this->nombre ." <b>Si</b> paga impuestos";
            echo "<br/>";
        } else {
            echo $this->nombre ." <b>No</b> paga impuestos";
            echo "<br/>";
            }
        }
    
}
$Empleado1 = new Empleado();
$Empleado1->inicializar("juan",5500);
$Empleado1->imprimir();
$Empleado2 = new Empleado();
$Empleado2->inicializar("Maria",6200);
$Empleado2->imprimir();






?>