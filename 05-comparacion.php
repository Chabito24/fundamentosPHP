<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

echo "Comparacion:";

echo "<br>";
echo "<br>";
echo "es " . $numero1 . " > " . $numero2 . " ";
var_dump($numero1 > $numero2);
echo "<br>";

echo "es " . $numero2 . " > " . $numero1 . " ";
var_dump($numero2 > $numero1);
echo "<br>";
echo "<br>";

echo "comparacion de igualdad";
echo "<br>";
echo "<br>";
echo "es " . $numero1 . " igual a " . $numero2 . " ";
var_dump($numero1 == $numero2);
echo "<br>";
echo "es " . $numero2 . " igual a " . $numero3 . " ";
var_dump($numero2 == $numero3);
echo "<br>";
echo "es " . $numero2 . " igual a " . $numero4 . " ";
var_dump($numero2 == $numero4);
echo " tener en cuenta que esta comparando un numero vs un string con ==";
echo "<br>";
echo "es " . $numero2 . " igual a " . $numero4 . " ";
var_dump($numero2 === $numero4);
echo " tener en cuenta que esta comparando un numero vs un string con ===";
echo "<br>";
echo "<br>";

echo "comparacion de <=>";
echo "<br>";
echo "<br>";
echo "si " . $numero1 . " menor a " . $numero2 . " imprime -1 ";
var_dump($numero1 <=> $numero2);
echo "<br>";
echo "si " . $numero2 . " igual a " . $numero3 . " imprime 0 ";
var_dump($numero2 <=> $numero3);
echo "<br>";
echo "si " . $numero2 . " es mayor a " . $numero1 . " imprime 1 ";
var_dump($numero2 <=> $numero1);
echo "<br>";

include 'includes/footer.php';