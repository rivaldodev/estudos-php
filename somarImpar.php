<?php
echo "Soma de números ímpares de 1 a 20: <br><br>";
$contador = 0;
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "$i é ímpar, somando...<br>";
        $contador += $i;
    } else {
        echo "$i não é ímpar, ignorando...<br>";
    }
}
echo "Total da soma de números ímpares: " . $contador;
?>
