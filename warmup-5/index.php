<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$suits = array("Hearts", "Clubs", "Spades", "Diamonds");
$ranks = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A");

$deck = array();
$counter = 0;

foreach($suits as $suit) {
    foreach($ranks as $rank) {
        $deck[$counter] = array($suit, $rank);
        $counter++;
    }
}

// Hjärter 5 - Hjärter har index 0, och 5 har index 3, så "index-summan" blir (0*13) + 3 = 3. 
echo $deck[3][1] . " of " . $deck[3][0];

// Klöver 8 - Klöver har index 1, och 8 har index 6, så "index-summan" blir (1*13) + 6 = 19. 
echo "<p>" . $deck[19][1] . " of " . $deck[19][0];


// En funktion som blandar kortleken.
shuffle($deck);

// Är det blandat? I så fall ska den här få olika värden varje gång.
echo "<p>" . $deck[19][1] . " of " . $deck[19][0];

/*
PHP har ett annorlunda scope gällande functions.
En function kommer bara åt argument som skickas in, samt variabler deklarerade inuti funktionen. Jämför med JS, där en funktion kommer åt saker som ligger utanför.
*/
function getRanks(string $rank, array $ranks, array $deck) {
    // Kolla om värdet finns i arrayen $ranks
    if (in_array($rank, $ranks)) {

        $retur = array_filter($deck, function ($value) use ($rank) {
            return $value[1] == $rank;
        });
        return $retur;
    }
}


$retur = getRanks("7", $ranks, $deck);
var_dump($retur);
?>