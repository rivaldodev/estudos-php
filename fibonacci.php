<?php
echo "Primeiros 20 números da sequência de Fibonacci:<br><br>";

$fib1 = 0; 
$fib2 = 1; 

echo "$fib1<br>";

for ($i = 1; $i <= 20; $i++) { 
    echo "$fib2<br>"; 

    // Calcula o próximo número na sequência
    $nextFib = $fib1 + $fib2;

    // Atualiza os valores para os próximos números
    $fib1 = $fib2;
    $fib2 = $nextFib;
}
?>
