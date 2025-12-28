<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Edward',
    'saldo' => 200,
    'disponible' => true
];

// EMPTY

echo "EMPTY";
echo "<br>";
echo "<br>";

echo "1. validación del arreglo: ";
echo "valida si el qrreglo esta o no vacio ";
echo "<br>";
echo "Respuesta clientes: ";
var_dump(empty($clientes));//cambia de false a true dependiendo el arreglo que se este validando
echo "<br>";
echo "Respuesta clientes2: ";
var_dump(empty($clientes2));//cambia de false a true dependiendo el arreglo que se este validando
echo "<br>";
echo "Respuesta clientes3: ";
var_dump(empty($clientes3));//cambia de false a true dependiendo el arreglo que se este validando
echo "<br>";
echo "<br>";

//ISSET

echo "2. Revision de arreglos o propiedades: ";
echo "Va a revisar si una propiedad o si un arreglo ha sido clreado o una propiedad ha sido definida";
echo "<br>";
echo "Respuesta clientes: ";
var_dump(isset($clientes));

echo "<br>";
echo "Respuesta clientes2: ";
var_dump(isset($clientes2));

echo "<br>";
echo "Respuesta clientes3: ";
var_dump(isset($clientes3));

echo "<br>";
echo "Respuesta clientes4: ";
var_dump(isset($clientes4));
echo " da false debido a que efectivamente este arreglo no se ha creado aun";
echo "<br>";
echo "<br>";

echo "3. validar si una propiedad existe en un arreglo: ";
echo "<br>";
echo "valida si existe la propiedad 'nombre': ";
var_dump(isset($cliente['nombre']));
echo "<br>";
echo "valida si existe la propiedad 'codigo': ";
var_dump(isset($cliente['codigo']));




include 'includes/footer.php';