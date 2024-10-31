<?php
/*
    While
    Do While
    FOR
    FOREACH
*/
#Repetição de 1 ao 10
echo "While: ";
$i = 0;
while($i < 10){
    $i++;
    echo $i;
}
#Do While
echo '<br/>Do While: ';
$i2 = 0;
do {
    $i2++;
    echo $i2;
} while($i2 <= 10);
echo "<br/>For: ";
# For
for ($i3 = 0; $i3 <= 10; $i3++){
    echo $i3;
}
echo "<br/>ForEach: ";

$array = array("laranja", "pêra", "maçã", "uva");

foreach($array as $key => $frutas){
    $contador = $key+1;
    echo $contador.'='.$frutas."<br/>";
}
?>