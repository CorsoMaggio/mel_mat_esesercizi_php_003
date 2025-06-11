<?php

//1) Estrazione
//2) Incapsulamento
//3) Astrazione

//Ci osno 2 tipi di Funzioni
//1) Built in Function (round(), count(), readline(), fgets())
//2) User Function 

$a = 5;
$b = 15;
$c = 12;



$sum1 = $a + $b;
$sum2 = $b + $c;
$sum3 = $sum1 + $sum2 + $c;

function sum($num1, $num2 = 0) //Dichiarazione 
{

    $sum = $num1 + $num2;
    return $sum;
    echo "La somma è: $sum \n";
}

$sum1 = sum($a);
$sum2 = sum($b, $c);
$sum3 = sum(sum($sum1, $sum2), $c);
//$sum3 = sum(sum(sum($a, $b), sum($b, $c)), $c);
echo "La somma totale è: $sum3 \n";
//sum(); //Invocato

// $sum1 = 15
// $sum2 = 22
//$sum3 = (15+22)+12