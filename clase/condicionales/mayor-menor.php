<?php

$contador = 0;
$notaMayor = 1;
$notaMenor = 5;


$n1 = (int)readline("Ingresa un numero: ");
$n2 = (int)readline("Ingresa un numero: ");
$n3 = (int)readline("Ingresa un numero: ");

     if ($n1 > $n3) {
        $notaMayor = $n1;
    }else if($n2 > $n3) {
        $notaMayor = $n2;

    }else if($n3 > $n1) {
        $notaMayor = $n3;
    
    }
    if ($n1 < $n2) {
        $notaMenor = $n1;
    }else if ( $n2 < $n3) {
    
        $notaMenor = $n2;
    }else if($n3 < $n1){
        $notaMenor = $n3;
    }
    
echo " Número mayor: ".$notaMayor."\n";
echo " Número menor: ".$notaMenor."\n";
?>