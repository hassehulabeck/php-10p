<?php

// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$riktnummer = array(
    array("Stockholm", "08"),
    array("Göteborg", "031"),
    array("Malmö", "040")
);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tre städer</title>
</head>

<body>
    <fieldset>
        <legend>Riktnummerväljare</legend>
        <form action="index.php" method="post">
            <select name="riktnummer">
                <?php
                foreach ($riktnummer as $stad) {
                    // Stad är en array, och index 1 innehåller riktnumret, medans index 0 innehåller stadens namn.
                    echo '<option value="' . $stad[1] . '">' . $stad[0] . '</option>';
                }
                ?>
            </select>
        </form>
    </fieldset>
</body>

</html>