<?php
/*Contar hasta que el usuario ingrese un número negativo:
  Inicializa una variable en 0.
  Utiliza un ciclo while para pedir al usuario que ingrese un número.
  Termina el ciclo cuando el usuario ingrese un número negativo.
  el break se utiliza para salir de un bucle
  */


$contador = 0;
while (true) {
  $ingresar = readline(("Ingresa un número: "));
  if ($ingresar < 0)break; 
  $contador =+ $ingresar;
}
?>