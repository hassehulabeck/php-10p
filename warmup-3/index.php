<?php

$myName     = "Hans Andersson";
$otherName  = "George Foreman";

$myLength = strlen($myName);
$otherLength = strlen($otherName);

$equalConter = 0;

/* En loop räcker. I och med att vi jämför strängarna per position, dvs att bokstav 4 i sträng A ska vara samma som bokstav 4 i sträng B, så räcker det om vi går igenom den ena strängen. Det saknar betydelse om de skulle vara olika långa.
*/

for ($i=0; $i < $myLength; $i++) {
    if ($myName[$i] == $otherName[$i]) {
        $equalConter++;
    }
}

echo "Antal lika tecken: " . $equalConter;
?>