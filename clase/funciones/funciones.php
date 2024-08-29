<?php
/*
$numero1 = readline("Ingresa un número: ");
$numero2 = readline("Ingresa otro número: ");

$numero3 = $numero1 + $numero2;
echo "El numero sumado es: ".$numero3."\n";


$numero4 = $numero1 - $numero2;
echo "El numero restado es: ".$numero4."\n";

$numero5 = $numero1 * $numero2;
echo "El número multiplicado es ". $numero5."\n";

$numero6 = $numero1 / $numero2;
echo "El número divido es ". $numero6."\n";
*/

//Funciones
/*
function saludar($nombre){
    return "Buenos dias ".$nombre;
}
echo "El saludo es: ".saludar("Brahiam");

function suma($a,$b){
    return $a + $b;
}
echo "suma: ".suma(3,4)."\n";
*/
$n1 = readline("Ingresa un numero: ");
$n2 = readline("Ingresa un numero: ");
$opera = readline("Ingresa la operacion que quieras hacer: ");
function operaciones($numero1, $numero2, $operacion){
    if ($operacion == "+" || $operacion =="suma"){
        return $numero1 + $numero2;
    }elseif ($operacion == "-"|| $operacion == "resta"){
        return $numero1 - $numero2;
    }elseif ($operacion == "*"|| $operacion == "multiplicacion"){
        return $numero1 * $numero2;
    }elseif ($operacion == "/" || $operacion == "division"){
        return $numero1 / $numero2;
    }
}
echo "El resultado es: ".operaciones($n1,$n2,$opera);
?>