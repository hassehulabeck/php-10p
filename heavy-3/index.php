<?php
session_start();

// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "movie.class.php";

// Hantera input. 
if (isset($_POST['new_movie'])) {
    // Gör om actors-strängen till en array.
    $actorsArray = explode(",", $_POST['actors']);

    // Skapa ett nytt filmobjekt.
    $movie = new Movie($_POST['title'], $actorsArray, $_POST['director'], $_POST['year']);

    $_SESSION['movies'][] = $movie;
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie object</title>
</head>

<body>
    <pre>
    <fieldset>
        <legend>Lägg till en film</legend>
        <p>Skriv in flera skådespelare åtskilda med kommatecken.</p>
        <form action="index.php" method="post">
            <label for="title">Title</label>
            <input type="text" name="title">
            <label for="actors">Skådespelare</label>
            <textarea name="actors" cols="30" rows="5"></textarea>
            <label for="director">Regissör</label>
            <input type="text" name="director">
            <label for="year">Utgivningsår</label>
            <input type="text" name="year">
            <input type="submit" name="new_movie" value="Lägg till">
        </form>
    </fieldset>
</pre>
</body>

</html>