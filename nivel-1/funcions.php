<?php
//ejercicio 1
echo "EJERCICIO 1<br>";
function ParImpar($num)
{
    if($num % 2 == 0){
      echo $num . " es numero Par <br>";
    } else {
      echo $num . " es numero Impar <br>";
    }
}
  ParImpar(56);
  ParImpar(45);

//ejercicio 2
echo "EJERCICIO 2<br>";
function escondite(){
  for($t = 1;$t <= 10; $t++)
  {
    if($t % 2 == 0)
    {
      echo $t . " ";
    }
  }
  echo "<br>";
}
escondite();

//ejercicio 3
echo "EJERCICIO 3 <br>";
function contaLimite($lim){
  $i = 1;
  do
  {
    echo $i . " ";
    $i++;
  } while($i <= $lim);
  echo "<br>";
}
contaLimite(27);

//ejercicio 4
echo "EJERCICIO 4 <br>";
function escondite10($h = 1,$f = 10){//se cuenta hasta 10($f)como parametro por defecto y de 1 en 1 con la variable $h 
  for($t = 1;$t <= $f; $t++){        //pero se puede elegir de cuanto en cuanto contar con $h y con el limite que se quiera llegar con parametro $f
    if($t % $h == 0)
    {
      echo $t . " ";
    }
  }
  echo "<br>"; 
}
escondite10();
escondite10(2);
escondite10(3,19);

//ejercicio 5
echo "EJERCICIO 5 <br>";
function Grado($nota)
{ 
  //$nota = 0;
  if ($nota >= 0 and $nota < 33)
  {
    echo " Estudiante Reprobado";
  }
  else if ($nota >= 33 and $nota < 44)
  {
    echo " Grado de Tercera Division";
  }
  else if ($nota >= 45 and $nota < 59)
  {
    echo " Grado de Segunda Division";
  }
  else if( $nota >= 60 and $nota <= 100)
  {
    echo " Grado de Primera Division";
  } 
  else
  {
    echo "ERROR en la Nota";
  }
  echo "<br>";
}
Grado(46);
Grado(18);

//ejercicio 6
echo "EJERCICIO 6 <br>";
function IsBitten() 
{
  $prob = rand(0,1); 
  if($prob == 1)
  {
    echo "TRUE \n";
  }else
  {
    echo "FALSE \n";
  }
  echo rand(0,1);
}
IsBitten();





?>