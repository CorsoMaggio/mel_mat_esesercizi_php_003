<?php
/*Scrivere un programma utilizzando le funzioni in grado di controllare l’ età  di ogni persona e stampare a video se:

Maggiore o uguale di 18: "$nome_persona può votare"
Minore di 18: "$nome_persona non può votare"*/


$persons = [
    [
        'name' => 'Marco',
        'age' => 18,
    ],
    [
        'name' => 'Vanessa',
        'age' => 12,
    ],
    [
        'name' => 'Jack',
        'age' => 34,
    ],
    [
        'name' => 'Maria',
        'age' => 55,
    ],
];

function checkAgeMajority($age, $majority = 18,)
{
    if ($age >= $majority) {
        return true;
    }
    return false;
}

function canDo($parameter, $name, $string = 'votare')
{
    if (checkAgeMajority($parameter)) {
        echo "$name può $string.";
    } else {
        echo "$name non può $string.";
    }
}

foreach ($persons as $person) {
    $name = $person['name'];

    canDo($person['age'], $name,);
}
