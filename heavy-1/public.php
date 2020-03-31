<?php
session_start();

// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public</title>
</head>

<body>
    <a href="index.php">Index</a> -
    <a href="public.php">Public</a> -
    <a href="secret.php">Secret</a>

    <p>Public - Alla kan se den här sidan
</body>

</html>