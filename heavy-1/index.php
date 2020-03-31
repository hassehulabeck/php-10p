<?php
session_start();
$_SESSION['userid'];

// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Kolla om någon försöker logga in. I så fall bör vi ha ett värde i 'name'.
if (isset($_POST['name'])) {
    if ($_POST['name'] == "rune" && $_POST['password'] == "rune") {
        $slump = mt_rand(100000, 999999);
        $_SESSION['userid'] = $slump;
    }
}

// funktionen isset kollar om det finns något värde i en viss variabel.
if (isset($_POST['logout'])) {
    // Använd funktionen unset för att ta bort värden.
    unset($_SESSION['userid']);
    echo "<p>Du är nu utloggad";
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <a href="index.php">Index</a> -
    <a href="public.php">Public</a> -
    <a href="secret.php">Secret</a>
    <fieldset>
        <legend>Logga in</legend>
        <form action="index.php" method="post">
            <label for="name">Namn</label>
            <input type="text" name="name">
            <label for="password">Lösenord</label>
            <input type="password" name="password">
            <input type="submit" value="Logga in">
        </form>

    </fieldset>
</body>

</html>