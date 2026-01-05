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

echo "4. Ejemplos de foreach: <br><br>";

$productos = [
    [
        'nombre' => 'Mouse',
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

echo "Forma 1: con if: <br><br>";

foreach( $productos as $producto) {?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo $producto['precio']; ?></p>
        <?php
            if ($producto['disponible']) {
            echo "<p>Disponible</p>";
        } else {
            echo "<p>No disponible</p>";
        }
        ?>
    </li>
    <?php
}
echo "<br><br><br>";
echo "Forma 2: con operador ternario: <br><br>";

foreach( $productos as $producto) {?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo $producto['precio']; ?></p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible';?></p>
    </li>
    <?php
}


include 'includes/footer.php';