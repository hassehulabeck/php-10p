<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$tid = new DateTime("now", new DateTimeZone("Europe/Stockholm"));

echo $tid->format("H:i");
