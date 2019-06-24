<?php
/**
 * Created by PhpStorm.
 * User: Abu
 * Date: 3/1/2018
 * Time: 2:57 PM
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
    $sql = 'SELECT Kleur FROM Evenementen';
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
        echo "$value <br>";
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
echo"<header style='background-color:$value; height: 50px;'><h1>Joejoe</h1></header>"
?>
<div id="wrapper">