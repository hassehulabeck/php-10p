<?php

$name = "Hans G Andersson";

// Hitta sista mellanslaget.
$lastSpace = strrpos($name, " ");

// Plocka ut efternamnet
$lastName = substr($name, $lastSpace);

// Skriv ut efternamnet med versaler.
echo (strtoupper($lastName));

?>
