<?php include 'includes/header.php';

$carrito = ['Tablet','Celular','Portatil','PC Gamer']; //este estilo de arreglo se usa mas en Laravel
$carrito2 = ['Tablet','Celular','Portatil','PC Gamer'];

echo "1. Arrays:";
echo "<br>";
echo "<pre>"; //esta etiqueta me permite organizar los datos para que visiblemente se entienda mejor, debe tener etiqueta de apertira y etiqueta de cierre
var_dump($carrito);
echo "</pre>";
echo "<br>";
echo "<br>";

echo "2. Arrays[i]: ";
echo "<br>";
echo "<pre>";
var_dump($carrito[0]);
echo "</pre>";
echo "<br>";
echo "<br>";

echo "3. Ver un elemento por indice: ";
echo $carrito[3];
echo "<br>";
echo "<br>";

echo "4. Agregar elemeno en el arreglo: 'Macbook Pro' ";
$carrito2[4] = 'Macbook Pro'; // Requiere conocer previamente la cantidad de elementos que tioene el arreglo para saber en que indice incorporar el nuevo elemento
echo "<pre>";
var_dump($carrito2);
echo "</pre>";
echo "<br>";
echo "<br>";

echo "5. agregar al inicio y al final un elemento en el arreglo: ";
echo "<br>";
echo "<br>";
echo "* Al final: 'Audifonos' ver indice [5]";
array_push($carrito2, 'Audifonos');
echo "<pre>";
var_dump($carrito2);
echo "</pre>";
echo "<br>";
echo "<br>";
echo "* Al inicio: 'Monitor curvo' ver indice [0]";
array_unshift($carrito2, 'Monitor curvo');
echo "<pre>";
var_dump($carrito2);
echo "</pre>";
echo "<br>";
echo "<br>";

echo "6. Otra forma de crear arreglos de la forma: $ clientes = array('cliente 1', 'cliente 2', 'cliente 3')";
$clientes = array('cliente 1', 'cliente 2', 'cliente 3'); // este estilo de arreglo se usa mas en Wordpress
echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";
echo "<br>";


include 'includes/footer.php';