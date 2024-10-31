<?php
echo "Números primos no intervalo de 1 a 50:<br><br>";

for ($i = 1; $i <= 50; $i++) { // Começamos em 2 porque 1 não é primo
    $isPrimo = true;

    // Checa se o número $i tem divisores além de 1 e ele mesmo
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $isPrimo = false;
            break; // Sai do loop interno ao encontrar um divisor
        }
    }

    if ($isPrimo) {
        echo "$i é primo<br>";
    }
}
?>
