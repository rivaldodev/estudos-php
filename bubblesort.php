<?php
function bubbleSort($array) {
    $n = count($array);

    // Loop para percorrer todo o array
    for ($i = 0; $i < $n - 1; $i++) {
        // Loop para comparar os elementos adjacentes
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Verifica se o elemento atual é maior que o próximo
            if ($array[$j] > $array[$j + 1]) {
                // Troca os elementos de lugar
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

// Exemplo de uso
$array = [64, 34, 25, 12, 22, 11, 90];
echo "Array original: ";
print_r($array);

$arrayOrdenado = bubbleSort($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);
?>
