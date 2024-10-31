<?php
for ($numero = 1; $numero <= 10; $numero++ ){
    echo "<h3>Tabuada do número $numero: </h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero &times; $i = " . ($numero * $i) . "<br/>";
    }
    echo "<br>";
}

?>
