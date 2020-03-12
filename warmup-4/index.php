<?php

$indexMonths = array("Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");

$indexDaysInMonth = array(31,28,31,30,31,30,31,31,30,31,30,31);

$daysInMonths = array(
    "Januari" => 31, 
    "Februari" => 28, 
    "Mars" => 31, 
    "April" => 30, 
    "Maj" => 31, 
    "Juni" => 30, 
    "Juli" => 31, 
    "Augusti" => 31, 
    "September" => 30, 
    "Oktober" => 31, 
    "November" => 30, 
    "December" => 31
);

$multidimensionalMonths = array(
    array("Januari", 31),
    array("Februari", 28),
    array("Mars", 31),
    array("April", 30),
    array("Maj", 31),
    array("Juni", 30),
    array("Juli", 31),
    array("Augusti", 31),
    array("September", 30),
    array("Oktober", 31),
    array("November", 30),
    array("December", 31)
);

// Skriv ut värden för april
echo "<p>" . $indexMonths[3] . " har " . $indexDaysInMonth[3] . " dagar";

// Associativa arrayer är lite besvärliga i och med att de inte har något numeriskt index.
// Så vi får samla ihop nycklarna (key => value) i en egen array.
$keys = array_keys($daysInMonths);
echo "<p>" . $keys[3] . " har " . $daysInMonths[$keys[3]] . " dagar";

echo "<p>" . $multidimensionalMonths[3][0] . " har " . $multidimensionalMonths[3][1] . " dagar";


// Och om vi vill loopa igenom varje array - foreach
echo "<p>";
// $key ger oss ett index som vi kan använda på den andra arrayen.
foreach($indexMonths as $key => $month) {
    echo $month . " har " . $indexDaysInMonth[$key] . " dagar.<br/>";
}

echo "<p>";
foreach($daysInMonths as $month => $days) {
    echo $month . " har " . $days . " dagar.<br/>";
}

echo "<p>";
foreach($multidimensionalMonths as $month) {
    echo $month[0] . " har " . $month[1] . " dagar.<br/>";
}

?>