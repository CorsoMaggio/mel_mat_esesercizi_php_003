<?php
/*Scrivere un programma che, data una stringa in input dal readline, conti quante vocali sono state inserite

//Esempio

Aiuole = Nella parola "Aiuole" ci sono 5 vocali 
Alba = Nella parola "Alba" ci sono 2 vocali 
Fgrty = Nella parola "Fgrty" ci sono 0 vocali*/
echo "Inserisci una parola:";
$word = strtolower(trim(fgets(STDIN)));
countVowel($word);



function containsVowel($element, $vowelString = 'aeiou')
{ //element==ciaociao
    //vowel==aeiou
    //($element[$i]==$vowelString[$i])
    for ($i = 0; $i < strlen($element); $i++) {
        if (str_contains($vowelString, $element)) {
            return true;
        }
    }
    return false;
}


// function countVowel($element)
// {
//     $vowel = 0;
//     for ($i = 0; $i < strlen($element); $i++) {

//         if (($element[$i] == 'a') || ($element[$i] == 'e') || ($element[$i] == 'i') || ($element[$i] == 'o') || ($element[$i] == 'u')) {
//             $vowel++;
//         }
//     }
//     echo "$element contiene $vowel vocali.";
// }

function countVowel($element)
{
    $vowel = 0;
    for ($i = 0; $i < strlen($element); $i++) {
        if (containsVowel($element[$i])) {
            $vowel++;
        }
    }
    echo "$element contiene $vowel vocali.";
}
