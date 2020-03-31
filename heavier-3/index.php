<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Hämta in en extern fil
include "horses.php";

// Använd variabeln från denna.
foreach ($horses as $horse) {
    echo "<p>" . $horse;
}
