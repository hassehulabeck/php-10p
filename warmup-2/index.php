<?php

$firstName = "Hans";
$lastName = "Andersson";

$summa = (strlen($firstName) + strlen($lastName));

/* abs är en matematisk funktion som ger det absoluta värdet
på ett tal, vilket i praktiken betyder "gör om det till ett positivt tal" */
$diff = abs(strlen($firstName) - strlen($lastName));

$kvot = (strlen($firstName) / strlen($lastName));

$rest = (strlen($firstName) % strlen($lastName));

echo "Förnamnet innehåller " . strlen($firstName) . " tecken.<br />";
echo "Efternamnet innehåller " . strlen($lastName) . " tecken.";

echo "<p>Summa: " . $summa . "<br />" . 
    "Differens: ". $diff . "<br />" . 
    "Kvot: ". $kvot . "<br />" . 
    "Rest: ". $rest; 

/* OBS. Att göra flera beräkningar på samma värde - strlen är en funktion, inte en egenskap - så bör man istället göra en beräkning längst upp i den här koden, och sedan använda det värdet därefter. */


?>