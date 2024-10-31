<?php
echo "Contagem de múltiplos de 3 e 5 entre 1 e 50:<br><br>";

$multiplosDe3 = 0;
$multiplosDe5 = 0;
$multiplosDe3e5 = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i é múltiplo de 3 e 5<br>";
        $multiplosDe3e5++;
    } elseif ($i % 3 == 0) {
        echo "$i é múltiplo de 3<br>";
        $multiplosDe3++;
    } elseif ($i % 5 == 0) {
        echo "$i é múltiplo de 5<br>";
        $multiplosDe5++;
    }
}

echo "<br>Total de múltiplos de 3: $multiplosDe3<br>";
echo "Total de múltiplos de 5: $multiplosDe5<br>";
echo "Total de múltiplos de 3 e 5: $multiplosDe3e5<br>";
?>
