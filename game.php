<!DOCTYPE html>
<html>
<head>
    <title>puzzlegame</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        input[type="text"] {
            width: 200px;
            margin-bottom: 10px;
            padding: 8px;
        }
        button {
            padding: 8px 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        .poem {
            margin-top: 20px;
            padding: 10px;
            background-color: #f2f2f2;
            width: fit-content;
        }
    </style>
</head>
<body>

<h2>puzzlegame</h2>
<form method="GET" action="game.php">
    Color: <br><input type="text" name="color"><br>
    hobby: <br><input type="text" name="hobby"><br>
    Celebrity: <br><input type="text" name="celebrity"><br>
    <button type="submit">click here</button>
</form>

<?php
if (isset($_GET['color']) && isset($_GET['hobby']) && isset($_GET['celebrity'])) {
    $color = htmlspecialchars($_GET['color']);
    $hobby = htmlspecialchars($_GET['hobby']);
    $celebrity = htmlspecialchars($_GET['celebrity']);

    echo "<div class='here there is'>";
    echo "make sure $color<br>";
    echo "$hobby you entered the correct<br>";
    echo "details $celebrity";
    echo "</div>";
}
?>

</body>
</html>