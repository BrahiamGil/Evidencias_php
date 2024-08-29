<?php
/*
Determinar si un número es primo:
Pide al usuario que ingrese un número.
Utiliza un ciclo while para verificar si 
el número es divisible por algún número menor que él mismo.
*/
 

$numero = readline("Ingrese un número: ");

// Verificar si el número es primo
if ($numero <= 1) {
    echo "$numero no es un número primo.\n";
} else {
    $divisor = 2;
    $esPrimo = 1; // 1 significa que asumimos que es primo
    
    while ($divisor <= $numero / 2) {
        if ($numero % $divisor == 0) {
            $esPrimo = 0; // 0 significa que no es primo
        }
        $divisor++;
    }
    
    // Determinar y mostrar el resultado
    if ($esPrimo == 1) {
        echo "$numero es un número primo.\n";
    } else {
        echo "$numero no es un número primo.\n";
    }
}
?>