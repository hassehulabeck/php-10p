<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Koppla upp mot databasen. Notera UTF-8
$dbh = new PDO('mysql:host=localhost;dbname=godis;charset=UTF8', 'godisAdmin', 'br0mmabl0cks');

/* Några olika sätt att jobba med PDO
Först query, som är enkelt, men inte alltid bra.
*/
echo "<h1>Enkel query</h1>";

// Skriv ut namnen på alla godissorter som kostar mer än 10 kr
// OBS. Här finns ingen säkerhet inbyggd. Om vi skulle hämta in villkoret ("price > 10") från ett inputfält, så kan vi få in skadlig kod.

// Först sparar vi queryn i en variabel
$query = "SELECT name FROM products WHERE price < 10";

// Därefter loopar vi igenom resultatet, vilket innebär en fråga per loop.
foreach ($dbh->query($query) as $godis) {
    echo $godis['name'] . "<br/>";
}

// Nu provar vi med prepared statements - lite omskriven query.
$query = "SELECT name FROM products WHERE price < :price";
echo "<h1>Prepared statement</h1>";

// Först förbereder vi queryn
// PDO::FETCH_ASSOC betyder att vi får resultatet som en associativ array.
$statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));
// Nu körs queryn,
$statement->execute(array(':price' => 10));

// Och så får vi tag i resultatet. FetchAll betyder just hämta allt. 
// Prova genom att skriva ut någon annan kolumn för godiset (price, weight, id)
$result = $statement->fetchAll();

// Och så loopar vi ut det.
foreach ($result as $godis) {
    echo $godis['name'] . "<br />";
}

// Nu provar vi med en variant på prepared statements - lite omskriven query.
$query = "SELECT name FROM products WHERE price < ?";
echo "<h1>Prepared statement - variant på värden</h1>";

// Först förbereder vi queryn
// PDO::FETCH_ASSOC betyder att vi får resultatet som en associativ array.
$statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));
// Nu körs queryn,
$statement->execute(array(10));

// Och så får vi tag i resultatet
$result = $statement->fetchAll();

// Och så loopar vi ut det.
foreach ($result as $godis) {
    echo $godis['name'] . "<br />";
}
