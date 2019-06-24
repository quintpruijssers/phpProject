<?php
/**
 * Created by PhpStorm.
 * User: QuintP
 * Date: 20-6-2019
 * Time: 13:41
 */

// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:projectP4server");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}


// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT Eventname FROM Evenementen';
    $sql2 = 'SELECT Logo FROM Evenementen';


    // Query uitvoeren
    $result = $pdo->query($sql);
    $result2 = $pdo->query($sql2);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van evenementen: ' . $e->getMessage();
    exit();
}

// Lege Array aanmaken voor de results
$aJokes = array();
$logo = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
while ($row2 = $result2->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $logo[] = $row2;
}
// Tonen van de inhoud van aJokes
$counter = 0;
$top = 8;
$value = NULL;

while ($counter < count($aJokes))
{
    foreach ($aJokes[$counter] as $value)
    {
        /*hao*/
    }

    echo "<div class='container' style='top: ".$top. "%; left: 38%;'>
    <img src='img/Take-Part-Festival-Logo-2019.png' alt='Avatar' class='image' style='width:100%'>
    <div class='middle'>
        <div class='text'> ".$value."</div></div></div>";
    $counter++;
    $top = $top +50;



}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 3</title>
    <style>

    </style>
</head>
<body>
<?php


?>
<img src="img/mojo-logo-triangle.svg" alt="logo_mojo">
<h1>Kies je festival</h1>
<h3>Gevonden festivals: <?php echo count($aJokes);?></h3>
</body>
</html>


