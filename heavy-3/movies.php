<?php
/* Lite lurigt här.
För att få den här lösningen att fungera, måste classen laddas innan sessionen startas.
Det har att göra med att PHP använder serialize/unserialize på sin sessions-data, vilket ställer till det lite när vi sparar ett objekt i densamma.
*/
include_once "movie.class.php";

session_start();

// Felhantering på.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A list of my favourite movies</title>
</head>

<body>
    <ul>
        <?php

        // Loopa igenom $_SESSION['movies']
        foreach ($_SESSION['movies'] as $storedmovie) {

            // Använd movie-objektet vid renderingen.
            echo '<li>' . $storedmovie->shortinfo();
        }
        ?>
    </ul>
</body>

</html>