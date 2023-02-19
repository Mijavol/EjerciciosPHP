<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>;
  </head>
  <body>
    <?php
        print "EJERCICIO 1 <br>";

        //variable integer contiene numero entero
        //variable double contiene numero decimal
        //variable string contiene un cadena de caracteres que puede ser texto o simbolos
        //variable boolean puede conitener dos soluciones verdadero o falso (true or false)
          $compra = 8; //variable edad de tipo integer
          $costo = 7.89; //variable costo de tipo double
          $nombre = "Araceli";//variable nombre de tipo String
          $descargado= true;//variable descargado de tipo boolean

          echo $nombre, " compró $compra manzanas y le costaron ", $costo ," euros. <br>";
          echo "true es:", $descargado,"<br> <br>";

        print"EJERCICIO 2 <br> <br>";

          $saludo = "Hello, World!";//define variable string
          echo $saludo,"<br>";//imprime variable saludo

          $mayusculas = strtoupper($saludo);//cambio a mayyusculas
          echo $mayusculas,"<br>";//impresion de variable mayusculas

          $reverso = strrev($saludo);//volteando palabra
          echo $reverso,"<br>";//imprimiendo palabra al reves

          $longitud = strlen($saludo);//midiendo variable
          echo $longitud,"<br>";//imprimiendo longitud

          $curso = " Este es el curso PHP";// curso variable de la frase
          echo $saludo . $curso ."<br> <br>";

        print"EJERCICIO 3 <br> <br>";

            define("NOMBRE","miguel javier");//define costante NOMBRE
            echo NOMBRE, "<br> <br>";
            $titulo = ucwords(strtolower(NOMBRE));//variable para constante tipo titulo
            echo "<b>$titulo</b>" . "<br> <br>";//impresion en negrita
            
        print"EJERCICIO 4 <br> <br>";

            //declarando variables integer
            $X = 12;
            $Y = 5;
            echo "1er NUMERO ENTERO: $X <br>"," 2do NUMERO ENTERO: $Y <br>";//imprimiendo
            $suma = $X + $Y;
            $resta = $X - $Y;
            $producto = $X * $Y;
            $modulo = $X % $Y;
            echo "la suma es: $suma <br>", "la resta $resta <br>", 
            "la multiplicación $producto<br>". " y el modulo es $modulo <br><br>";

            //declarando variables double
            $N = 22.54;
            $M = 5.23;
            echo "1er VARIABLE TIPO DOUBLE: $N <br>"," 2do VARIABLE TIPO DOUBLE: $M <br>";//imprimiendo
            $suma1 = $N + $M;
            $resta1 = $N - $M;
            $producto1 = $N * $M;
            $modulo1 = $N % $M;
            echo "la suma es: $suma1 <br>", "la resta $resta1 <br>", 
            "la multiplicación $producto1 <br>". " y el modulo es $modulo1 <br> <br>";
          
          print"EJERCICIO 5 <br> <br>";

            $nota1 = array(5, 9, 6, 12, 71);
            $nota2 = array(10, 8, 20);
            print_r($nota2);
            echo "array nota2 <br>";
            $nota2[3] = 42 ;//ingresamos elemento al array nota2
            print_r($nota2); 
            echo "elemento incluido en array nota2 <br>";
            print_r($nota1);
            echo "array nota1 <br> <br>";

            for($i = 0 ; $i <=  count($nota2)-1 ;++$i){//unimos arrays
              $nota1[count($nota1)] = $nota2[$i];
            }
            for($a = 0;$a <= count($nota1)-1; $a++){
              print_r($nota1[$a]);
              echo "<br>";
            }
            print_r($nota1);
            echo "los dos arrays unidos"
    ?>
  </body>
</html>
