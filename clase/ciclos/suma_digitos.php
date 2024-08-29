<?php
/* Calcular la suma de dígitos de un número:
  Pide al usuario que ingrese un número entero positivo.
  Utiliza un ciclo while para sumar los dígitos del número.*/

$ingresar = readline("Ingresa un número positivo: ");
$suma = 0; 
while($ingresar > 0){
    $numero = $ingresar % 10;
    $suma += $numero;
    $ingresar = (int)($ingresar / 10);

}
echo "La suma de los dígitos es: $suma\n"
?>