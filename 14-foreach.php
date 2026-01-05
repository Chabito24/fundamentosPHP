<?php include 'includes/header.php';

echo "1. Listar con foreach: <br><br>";

$clientes = ['Edward', 'Juan', 'Cristina', 'Ingrid', 'Andrea', 'Gabriela'];

foreach( $clientes as $cliente ) {
    echo "<option value='$cliente'>$cliente</option>";
}

echo "</select>";
echo "<br><br>";

echo "2. Listar con solo for: <br><br>";

for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . "<br>";
}
echo "<br><br>";

echo "3. iterar arreglos asociativos con foreach: <br><br>";

$cliente = [
    'nombre' => 'juan',
    'saldo' => 200,
    'tipo' => 'premium'
];

foreach ( $cliente as $key => $valor){ //Relacionamos la variable cliente as la llave y => el valor de la llave, podemos omitir el $key y mostrar inicamente el valor
    echo $key . " - " . $valor . "<br>";
}
echo "<br><br>";


include 'includes/footer.php';