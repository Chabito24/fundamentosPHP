<?php include 'includes/header.php';

echo "1. if, else: ";
echo "validación por medio de if y else: valida la variable llamada 'autenticado' y muestra un mensaje segun aplique";
echo "<br>";
echo "Respuesta: "; 

$autenticado = false;

if($autenticado) {
    echo "Usuario autenticado";
}else {
    echo "Usuario sin autenticar";
}
echo "<br>";
echo "<br>";


echo "2. or: ";
echo "valida dos condicionales por medio de or"; //al menos una de las dos condicionales debe cumplirse si son varios or igual al menos una se debe cumplir 
echo "<br>";
echo "Respuesta: "; 

$autenticado2 = false;
$admin = true;

if($autenticado2 || $admin ) {
    echo "Usuario admin autenticado";
}else {
    echo "Usuario sin autenticar";
}
echo "<br>";
echo "<br>";


echo "3. if anidados: ";
echo "valida dos o mas if ";
echo "<br>";
echo "Respuesta: "; 

$cliente = [
    'nombre' => 'Edward',
    'saldo' => 0, //cambiar de 0 a cualquier valor superior a cero ejemplo 200
    'informacion' => [
        'tipo' => 'regular', //cambiar de premium a regular
    ]
];

if( !empty($cliente)){ //El signo de ! niega la condicion lo que quiere decir es que si No"!" esta vacio"empty" muestre el mensaje que informamos en el echo
    echo "El arreglo del cliente NO esta vacio ";

    if($cliente['saldo'] > 0) {
        echo "y el saldo esta disponible";
    }else {
        echo "y sin saldo disponible";
    }
}
echo "<br>";
echo "<br>";

echo "4. else if: ";
echo "revisa mas de una condición y dependiendo de la condicion validada imprime el echo que corresponde"; // en este caso valida si la primera condicional es correcta imprime ese primer mensaje, si no es correcta y el else if si es correcto imprime ese segundo mensaje, si noi el if ni el else if es correcto imprime el tercer mensaje del else, pare ello se pueden jugar con os datos del arreglo que muestre el mensaje de cada echo 
echo "<br>";
echo "Respuesta: ";

if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo disponible";
} else if ($cliente ['informacion']['tipo'] === 'premium'){
    echo " Categoria del cliente es Premium sin saldo disponible"; 
} else {
    echo "EL cliente no pertenece a la categoria Premium";
}
echo "<br>";
echo "<br>";

echo "5. switch: ";
echo "En lugar de usar muchos else if, lo mejor es usar un switch";
echo "<br>";
echo "Respuesta: ";

$tecnologia = 'Python'; //cambiar entre PHP, JavaScript, HTML, Python y otro para el default

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje"; //valida e imprime si es igual a PHP
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web"; //valida e imprime si es igual a JavaScript
        break;
    case 'HTML':
        echo 'Emmm...HTML, No es un lenguaje de programación'; //valida e imprime si es igual a HTML
        break;
    case 'Python':
        echo 'Lenguaje en proceso de aprendizaje, super.'; //valida e imprime si es igual a HTML
        break;
    default:
        echo "No se cual es ese lenguaje aun :("; //valida e imprime si NO es igual a nnguno de los anteriores o si es igual a python o alguno diferente.
        break;

}





include 'includes/footer.php';