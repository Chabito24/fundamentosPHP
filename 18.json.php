<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'televisión 24"',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'MacBook Air4',
        'precio' => 400,
        'disponible' => false
    ]
];

echo '<pre>';
echo 'arreglo inicial <br>'; 
var_dump($productos);

echo '<br><br>';

echo '1. convertir a json con $json = json_encode($productos) <br>'; 
/**
 * toma el arreglo y lo convierte en string, ideal para consumirlo con javascript
 * JSON_UNESCAPED_UNICODE permite que se muestren los acentos en el string y no lo cambie por caracteres raros, ver elemento televisión 
 */
$json = json_encode($productos,JSON_UNESCAPED_UNICODE); 
var_dump($json);

echo '<br><br>';
echo '2. convertir a string con $json = json_decode($json) <br>'; 
/**
 * pasa us string a un arreglo
 */
$json_array = json_decode($json); 
var_dump($json_array);

echo '</pre>';




include 'includes/footer.php';