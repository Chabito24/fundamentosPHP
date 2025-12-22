<?php include 'includes/header.php';

//variables

$nombre = "Edward "; //crea una variable con $
echo $nombre; // imprime la variable con echo, muestra el valor
echo "<br>";
print $nombre; // imprime la variable con print muerta el valor en comillas
echo "<br>";
var_dump($nombre); // imprime la variable con var_drump muestra el valor con el tipo de dato en este caso string(7)
echo "<br>";

//identificadoro constante

define('constante', "este es el valor de la constante"); //crea un identificacor conde pasamos la constante seguido de coma y el valor de ese identificador
echo "<br>";
echo constante; //se imprime sin el signpo de dplar entes del identificador
echo "<br>";
var_dump(constante);
echo "<br>";

const constante2 ="hola Edw"; //no es tan comun crearlas de esta manera normalmente se usa define
echo "<br>";
echo constante2;
echo "<br>";

//
include 'includes/footer.php';