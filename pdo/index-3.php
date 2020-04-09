<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO 2</title>
</head>

<body>

    <form action="index-3.php" method="POST">
        <label for="maxprice">Maxpris</label>
        <input type="number" name="maxprice" value=10>
        <label for="maxweight">Maxvikt</label>
        <input type="number" name="maxweight" value=150>
        <input type="submit" name="submit" value="Visa godis">
    </form>


    <?php
    // Koppla upp mot databasen. Notera UTF-8
    $dbh = new PDO('mysql:host=localhost;dbname=godis;charset=UTF8', 'godisAdmin', 'br0mmabl0cks');

    // Kolla om någon har skickat in input 
    if (isset($_POST['submit'])) {
        $maxPrice = $_POST['maxprice'];
        $maxWeight = $_POST['maxweight'];
    } else {
        $maxPrice = 10;
        $maxWeight = 150;
    }


    // Nu provar vi med prepared statements - lite omskriven query.
    $query = "SELECT * FROM products WHERE price < :price && weight < :weight";
    echo "<table><thead><tr><th>#<th>Name<th>weight<th>price<tbody>";
    // Först förbereder vi queryn // PDO::FETCH_ASSOC betyder att vi får resultatet som en associativ array. 
    $statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));
    // Nu körs queryn,
    $statement->execute(array(':price' => $maxPrice, ':weight' => $maxWeight));

    // Och så får vi tag i resultatet. FetchAll betyder just hämta allt.
    // Prova genom att skriva ut någon annan kolumn för godiset (price, weight, id)
    $result = $statement->fetchAll();

    // Och så loopar vi ut det.
    foreach ($result as $key => $godis) {
        echo "<tr>
            <td>" . $key . "
            <td>" . $godis['name'] . "
            <td>" . $godis['weight'] . "
            <td>" . $godis['price'];
    }


    ?>


</body>

</html>