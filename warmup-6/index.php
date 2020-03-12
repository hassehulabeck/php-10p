<?php 
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$numbers = array();

// Konstruera en array med 10 tal.
for ($i=0; $i < 10; $i++) {
    $numbers[$i] = mt_rand(0,999);
}

/*
PHP har ett annorlunda scope gällande functions.
En function kommer bara åt argument som skickas in, samt variabler deklarerade inuti funktionen. Jämför med JS, där en funktion kommer åt saker som ligger utanför.
*/
function selectSomeNumbers(int $amount, array $numbers) {

    $maximal = count($numbers);
    if ($amount <= $maximal) {

        for ($i=0; $i<$amount; $i++) {
            // Minska maximal med 1 per varv, eftersom det ju försvinner ett tal ur numbers.
            $retur[$i] = array_splice($numbers, mt_rand(0, $maximal - $i), 1);
        }
        return $retur;
        /* Av någon anledning får jag ganska ofta ett nollvärde bland de tre i retur.
        Den som kommer på varför får en mindre belöning. */ 
    }
}

// <pre> för att göra var_dump läsligare.
echo "<pre>";
var_dump(selectSomeNumbers(3, $numbers));
