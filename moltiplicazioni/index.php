<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabellina</title>
</head>
<body>

<h1>Tabellina</h1>

<form method="post">
    Inserisci un numero: <input type="number" name="numero">
    <input type="submit" value="Mostra">
</form>

<?php
if (isset($_POST["numero"])) {
    $n = $_POST["numero"];
    echo "<h2>Tabellina del $n</h2>";
    for ($i = 1; $i <= 10; $i++) {
        $risultato = $n * $i;
        echo "$n x $i = $risultato<br>";
    }
}
?>

</body>
</html>
