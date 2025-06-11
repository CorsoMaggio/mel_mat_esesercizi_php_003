<?php
/*Utilizzando un approccio funzionale (piccole funzioni che risolvono un piccolo problema), riscrivere il programma fatto in precedenza che stampi in console tutti i numeri da 1 a 30.

Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”;
Se multiplo di 5 deve stampare “JAVASCRIPT”;
Se multiplo di 3 e 5 (15) deve stampare “Bari”;*/
function printNumbers($max)
{
    for ($i = 0; $i <= $max; $i++) {
        if (isDivisible($i, 15)) {
            echo "Bari,";
        } else if (isDivisible($i, 5)) {
            echo "Javascript,";
        } else if (isDivisible($i, 3)) {
            echo "PHP,";
        } else {
            echo "$i,";
        }
    }
}
function isDivisible($n1, $divisor)
{
    if ($n1 % $divisor == 0) {
        return true;
    }
    return false;
}
printNumbers(30);
