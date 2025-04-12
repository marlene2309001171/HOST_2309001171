<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-B">
    <title>string</title>
</head>
    <body>
    <?php
$name = "Marlene UWIMPAYE";


$lowercaseName = strtolower($name);


$uppercaseName = strtoupper($name);

$nameLength = strlen($name);


echo "<h2>Name Details</h2>";
echo "<hr>";
echo "<p>Original Name: $name</p>";
echo "<p>Lowercase: $lowercaseName</p>";
echo "<p>Uppercase: $uppercaseName</p>";
echo "<p>Length: $nameLength characters</p>";
?>


    
