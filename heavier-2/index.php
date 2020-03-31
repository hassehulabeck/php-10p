<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Kör bara om $_FILES innehåller något */
if ($_FILES) {

    $uploadDir = "../../temp/";
    $uploadPath = $uploadDir . basename($_FILES['fileToUpload']['name']);

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadPath)) {
        echo "Filen är uppladdad";
    } else {
        echo "Något gick fel";
    }
}

/*
Info om filuppladdning hittar du på https://www.php.net/manual/en/features.file-upload.post-method.php 
*/

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>

<body>
    <form enctype="multipart/form-data" action="index.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
        <input type="file" name="fileToUpload" id="ftu" />
        <input type="submit" value="Ladda upp fil" />
    </form>
</body>

</html>