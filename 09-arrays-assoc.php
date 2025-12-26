<?php include 'includes/header.php';

$cliente = [
    "nombre" => 'juan',
    "saldo" => 200,
    "información" => [
        "tipo" => 'Premium',
        "disponible" => true,
        "credito" => 100
    ]
];

echo "1. ver el arreglo: ";
echo "<br>";
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";
echo "<br>";

echo "2. acceder a un objeto dentro del arreglo: ";
echo "<br>";
var_dump($cliente ["nombre"]); //accedemos directamente por el nombre de la propiedad
echo "</pre>";
echo "<br>";
echo "<br>";

echo "3. imprimir directamente el valor del objeto dentro del array:  ";
echo "<br>";
echo "nombre: ";
echo $cliente['nombre'];
echo "<br>";
echo "saldo: ";
echo $cliente['saldo'];
echo "<br>";
echo "<br>";

echo "4. acceder a la informacion de un arreglo dentro de otro arreglo:  ";
echo "<br>";
echo "Información tipo: ";
echo $cliente['información']['tipo'];
echo "<br>";
echo "Información disponible: ";
echo var_dump($cliente['información']['disponible']); //muestra el tip y valor del elemento en este caso que es un booleano y su valor es true
echo "<br>";
echo $cliente['información']['disponible']; //este solo muestra si es true  y si es false 0
echo "<br>";
echo "Saldo disponible: ";
echo $cliente['información']['disponible'];
echo "<br>";
echo "<br>";

echo "5. Agregar mas propiedades al objeto: ";
echo "<pre>";
$cliente["codigo"] = 1019021157;
echo "Ver punto 1 ya debe aparecer credito asignado";
echo "</pre>"; // al validar el var_dump de $cliente me lo muestra con 
echo "Credito: ";
echo $cliente['información']['credito'];
echo "<br>";
echo "<br>";


include 'includes/footer.php';