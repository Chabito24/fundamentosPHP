<?php include 'includes/header.php';

$carrito = ['Tablet', 'Portatil', 'Televisor'];

echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "</br>";
echo "</br>";

echo " 1. busqueda de elementos en un arreglo: ";
echo "<br>";
echo "busca el elemento 'Tablet': ";
var_dump( in_array('Tablet', $carrito));
echo "</br>";
echo "busca el elemento 'Audifonos': ";
var_dump( in_array('Audifonos', $carrito));
echo "</br>";
echo "</br>";

echo " 2. Ordenar elementos de un arreglo: ";

$numeros = array(5,7,1,4,3,2,6);
sort($numeros);

echo "</br>";
echo "* ordenados de menor a mayor";
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "</br>";
echo "</br>";

$numeros2 = array(5,7,1,4,3,2,6);
rsort($numeros2);

echo "</br>";
echo "* ordenados de mayor a menor";
echo "<pre>";
var_dump($numeros2);
echo "</pre>";
echo "</br>";
echo "</br>";

echo " 3. Ordenar arreglo asociativo: ";

$cliente = array(
    'nombre' => 'Edward',
    'categoria' => 'Premium',    
    'credito' => 200
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "</br>";
echo "</br>";

echo "* Organiza por valores: asort "; //orden alfabetico

asort($cliente);

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "</br>";
echo "</br>";

echo "* Organiza por valores al revés: arsort "; //orden alfabetico pero al reves, es decir, de la Z a la A

arsort($cliente);

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "</br>";
echo "</br>";

echo "* Organiza por llaves: ksort "; //orden alfabetico

ksort($cliente);

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "</br>";
echo "</br>";

echo "* Organiza por llaves al revés: krsort "; //orden alfabetico pero al reves, es decir, de la Z a la A

krsort($cliente);

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "</br>";
echo "</br>";
















include 'includes/footer.php';