<?php 
declare(strict_types=1); //valida los tipos de dato, en este caso si sumamos un float un arreglo o un string por ejemplo con el entero al posicionar el mouse sopbre ese dato va a mostrar el error indicanco por ejemplo que en el segundo parametro de sumar2 lo declaramos como entero, esto permite mejorar el tipado
include 'includes/header.php';

echo "1. crear funcion en PHP; se crea similar a JS <br> Resultado 2 + 2 = ";

function sumar() { //Creamos la funcion
    echo 2+2; // ejecutamos una suma
}

sumar(); //llamamos la funcion

echo "<br><br>";

echo "2. crear funcion en PHP con parametros y argumentos ";

function sumar2(int|float $numero1 = 0, int|float $numero2 = 0) { //Creamos la funcion con parametros, int|float permite que el numero sea entero o float, le asignamos a cada numero un valor por defecto en este caso es 0, solo toma ese valor si en los parametros no asignamos ningun valor a alguno de los dos numeros
    echo $numero1 + $numero2; // ejecutamos una suma
}
echo "<br>";
echo "2 + 2 = ";
sumar2(2, 2); //llamamos la funcion con argumentos
echo "<br>";
echo "10 + 20 = ";
sumar2(10, 20);
echo "<br>";
echo "5 + 2 = ";
sumar2(5, 2);
echo "<br>";
echo "100 + 2.5 = ";
sumar2(100, 2.5);
echo "<br>";
echo "1 = ";
sumar2(1); //si se deja un solo numero en el argumento genera un error por ello en el argumento le damos un valor al numero1 y 2 en este caso, tambien debemos declarar se son enteros (int) por si se llega a sumar con un string nos detalle el tipo de datos que se estan sumando-
echo "<br><br>";



echo "<br><br>";






include 'includes/footer.php';