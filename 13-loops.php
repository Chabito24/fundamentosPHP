<?php include 'includes/header.php';

echo "1. while: se va a ejecutar hasta que una condicion sea ejecutada como falsa <br><br>"; //en este caso se crea un contador que inicia en 0 y se ejecuta wile indicando que lo haga mientras sea menor o igual a 10


$i = 0; // inicializador: cambiar por un numero mayor a 10 y ver resultado

while($i <= 10) {

    echo $i . "<br>";

    $i += 2; // incremento de 2 en 2 para que sea de 1 en 1 solo poner ++;
}
echo "<br><br>";

echo "2. do...while: se ejecuta al menos una vez<br><br>"; //primero ejecuta el codigo y luego revisa la condicion, es decir si $1 = 100 imprime el 100 y no mas a contrario de solo el while que ono imprimiria nada

$i = 0; // inicializador: cambiar por un numero mayor a 10 y ver resultado

do {
    echo $i . "<br>";
    $i += 2;
} while ($i <= 10);

echo "<br><br>";

echo "3. for loop <br><br>"; //Se ejecuta mienrtras que una condicion sea evaluada como verdadera o como falsa

for( $i = 0; $i <= 10; $i += 2 ) {// ORDEN: (inicializador; while; do) 

    echo $i . "<br>";
}

echo "<br><br>";

/**
 * EJERCICIO:
 * si n / 3 mostrar fizz
 * si n / 5 mostrar buzz
 * si n / 3 y 5 mostrar fizz buzz
 */

echo "Ejercicio fizzbuzz: si es multiplo de 3 imprime fizz, si es multiplo de 5 mostrar buzz y si es de ambos mostrar fizz buzz <br><br>";

for ($i = 1; $i <= 100; $i++) {

    if ($i % 15 == 0) { //tambien puede ser ($i % 3 === 0 && $i 5 === 0)
        echo $i . " - fizzbuzz <br>";
    } elseif ($i % 3 === 0) {
        echo $i . " - fizz <br>";
    } elseif ($i % 5 === 0) {
        echo $i . " - buzz <br>";
    } else {
        echo $i . "<br>";
    }

}
echo "<br><br>";

echo "Ejercicio: Repetir componentes de UI (estrellas, placeholders, filas) <br><br>";

$rating = 2;

for ($i = 1; $i <= 5; $i++) {
    echo $i <= $rating ? "⭐" : "☆";
}

echo "<br><br>";

echo "Ejercicio: Generar <option> de un select (años, cantidades, etc.)<br><br>"; //Ejemplo: años de 2000 a 2030:

for ($anio = 2000; $anio <= 2030; $anio++) {
    echo "<option value='$anio'>$anio</option>"; //En un <select>, cada <option> ya es “una fila” dentro del menú desplegable, así que el navegador ya las separa automáticamente. Por eso el <br> no aporta nada (y normalmente se ignora).
}

echo "<br><br>";


include 'includes/footer.php';