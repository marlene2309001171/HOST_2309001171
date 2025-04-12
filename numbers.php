
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-B">
    <title>NUMBERS</title>
</head>
    <body>
 <?php

$var1 = 10;
$var2 = 20;


$minValue = min($var1, $var2);
$maxValue = max($var1, $var2);


$var1Incremented = ++$var1; 
$var2Decremented = --$var2; 


echo "<h2>Variable Details</h2>";
echo "<hr>";
echo "<p>Initial Value of var1: 10</p>";
echo "<p>Initial Value of var2: 20</p>";
echo "<p>Minimum Value: $minValue</p>";
echo "<p>Maximum Value: $maxValue</p>";
echo "<p>var1 after increment: $var1Incremented</p>";
echo "<p>var2 after decrement: $var2Decremented</p>";
?>
