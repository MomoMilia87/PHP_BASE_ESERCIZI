<?php
$numeri = [2, 4, 6, 8, 10, 15];
$somma = 0;

foreach ($numeri as $valore) {
    $somma = $somma + $valore; 
}

echo "La somma calcolata è: " . $somma;
?>