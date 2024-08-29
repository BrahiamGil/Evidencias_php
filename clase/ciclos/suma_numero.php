<?php
$numero = readline("Ingresa un que quieras sumar con los primeros numeros: ");
$suma = 0;
for ($i = 1; $i <= $numero; $i++) {
     $suma += $i;
}
echo "La suma es: ", $suma;
?>