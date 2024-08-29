<?php
#Ciclo while
$tabla = readline('Digita el número que desea multiplicar: ');
$i = 1;
while($i <= 12){
    echo $tabla. " X ". $i .": ". ($tabla * $i). "\n" ;
    $i++;
}
?>