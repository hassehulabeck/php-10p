<?php
session_start();

// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SESSION['userid'] >= 100000 && $_SESSION['userid'] <= 999999) {
    echo '<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret</title>
</head>

<body>
    <a href="index.php">Index</a> -
    <a href="public.php">Public</a> -
    <a href="secret.php">Secret</a>

    <p>Secret

    <form action="index.php" method="post">
        <input type="submit" value="Logga ut" name="logout">
    </form>
</body>

</html>';
} else {
    echo '<html><body>    <a href="index.php">Index</a> -
    <a href="public.php">Public</a> -
    <a href="secret.php">Secret</a>

    <p>piss off';
}
/*
Formuläret skickar informationen till index.php. På så vis samlar vi all funktionalitet där, vilket kan vara bra. */
