<?php
/*
.Imprimir números hasta que la suma de ellos sea mayor a un valor:
  Pide al usuario que ingrese un valor límite.
  Utiliza un ciclo while para seguir sumando números aleatorios
*/

// Solicita al usuario que ingrese un valor límite
echo "Ingresa un valor límite: ";
$limite = trim(fgets(STDIN));

// Inicializa la suma en 0
$suma = 0;

// Usa un ciclo while para sumar números aleatorios
while ($suma <= $limite) {
    // Genera un número aleatorio entre 1 y 100
    $numeroAleatorio = rand(1, 100);
    
    // Suma el número aleatorio a la suma total
    $suma += $numeroAleatorio;
    
    // Imprime el número aleatorio y la suma actual
    echo "Número aleatorio: $numeroAleatorio, Suma actual: $suma\n";
}

echo "La suma total ($suma) ha superado el valor límite ($limite).\n";
?>

