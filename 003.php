<?php
/*Scrivere un programma funzionale che, dato un numero in input ($max), stampi a video:

PRIMA tutti i numeri Dispari
DOPO tutti i numeri PARI*/
function isDivisible($n1, $status, $divisor = 2)
{
    if ($n1 % $divisor == $status) {
        return true;
    }
    return false;
}



function printNumbers($max, $status)
{
    for ($i = 0; $i <= $max; $i++) {
        if (isDivisible($i, $status)) {
            echo "$i,";
        }
    }
    echo "\n";
}

printNumbers(10, 0);
printNumbers(10, 1);
