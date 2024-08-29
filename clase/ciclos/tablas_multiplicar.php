<?php
/*Imprimir una tabla de multiplicar:
pide al usuario que ingrese un número.
Utiliza un ciclo for para imprimir la tabla de multiplicar de ese número (del 1 al 10).*/
$numero = readline("Ingresa el número de la tabla que quieres multiplicar: ");
for ($i = 1; $i <= $numero; $i++) {
    for ($j = 1; $j <= 12; $j++) {
        echo"Tabla de multiplicar de ".$i."\n";
        echo $i. " X ". $j." = ". ($i * $j)."\n" ;
    }
}
?>