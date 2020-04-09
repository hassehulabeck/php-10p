<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Koppla upp mot databasen. Notera UTF-8
$dbh = new PDO('mysql:host=localhost;dbname=godis;charset=UTF8', 'godisAdmin', 'br0mmabl0cks');

// Nu provar vi med prepared statements - lite omskriven query.
$query = "SELECT * FROM products WHERE weight < :weight";
echo "<table><thead><tr><th>#<th>Name<th>weight<th>price<tbody>";

// Först förbereder vi queryn
// PDO::FETCH_ASSOC betyder att vi får resultatet som en associativ array.
$statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));
// Nu körs queryn,
$statement->execute(array(':weight' => 150));

// Och så får vi tag i resultatet. FetchAll betyder just hämta allt. 
// Prova genom att skriva ut någon annan kolumn för godiset (price, weight, id)
$result = $statement->fetchAll();

// Och så loopar vi ut det.
foreach ($result as $key => $godis) {
    echo "<tr><td>" . $key . "<td>" . $godis['name'] . "<td>" . $godis['weight'] . "<td>" . $godis['price'];
}
