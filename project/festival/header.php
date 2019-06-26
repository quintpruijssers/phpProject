<?php
/**
 * Created by PhpStorm.
 * User: Abu
 * Date: 3/1/2018
 * Time: 2:57 PM
 */

foreach($_POST as $name => $content) { // Most people refer to $key => $value

}


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

$kleur = "Kleur";
    //SELECT Kleur FROM Evenementen WHERE Eventname =". $content
// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = "SELECT Kleur FROM Evenementen WHERE Eventname = '$content' ";

    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
// Tonen van de inhoud van aJokes
$counter = 0;
$key = $value = NULL;
while ($counter < count($aJokes))
{
    foreach ($aJokes[$counter] as $key => $value)
    {
        $counter++;
    }
}
try
{
    // Query schrijven
    $sql = "SELECT Logo FROM Evenementen WHERE Eventname = '$content' ";

    // Query uitvoeren

    $result = $pdo->query($sql);
    echo "<img src='../../../../../../../C:\Users\maxbr\source/repos\Project-p4\mojo\mojo\organisator\IMGupload" . $content . $result .  "' height='42' width='42'>";
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
?>







<?php
try
{
    $pdo1 = new PDO("odbc:projectP4server");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

$kleur = "Kleur";
//SELECT Kleur FROM Evenementen WHERE Eventname =". $content
// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql2 = "SELECT Logo FROM Evenementen WHERE Eventname = '$content' ";

    // Query uitvoeren
    $result2 = $pdo1->query($sql2);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$logo = array();
// Door de results heen loopen via een while
while ($row2 = $result2->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $logo[] = $row2;
}
// Tonen van de inhoud van aJokes
$teller = 0;
$sleutel = $waarde = NULL;
while ($counter < count($logo))
{
    foreach ($logo[$teller] as $sleutel => $waarde)
    {
        $counter++;

    }


}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 3</title>
</head>
<body>
<?php
echo"<header style='background-color:$value; height: 50px;'><h1>" .$waarde."</h1></header>"
?>
<div id="wrapper">