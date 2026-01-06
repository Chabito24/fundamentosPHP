<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/header.php';

echo '1. Funcion : string que retorna un valor <br>';

/**
 * Retorna un mensaje fijo indicando que el usuario está autenticado.
 *
 * Nota: este ejemplo es solo de práctica para ver:
 * - declare(strict_types=1)
 * - funciones con tipo de retorno
 * - asignación del retorno a una variable
 */
function mensajeAutenticacion(): string
{
    return 'El usuario está autenticado';
}

$mensaje = mensajeAutenticacion(); // Guardamos el texto retornado por la función
echo $mensaje;                     // Mostramos el mensaje en pantalla


echo '<br><br>';

echo '2. Funcion : void que imprime un valor <br>';

/**
 * Imprime en pantalla un mensaje según el estado de autenticación.
 *
 * Esta función es de tipo `void`, por lo tanto:
 * - NO devuelve ningún valor (no hay return).
 * - Su “resultado” es el texto que imprime con echo.
 *
 * @param bool $autenticado  true si el usuario está autenticado; false si no.
 * @return void
 */
function mensajeAutenticacion2(bool $autenticado): void {
    // Usamos un operador ternario para elegir el mensaje a imprimir:
    // - Si $autenticado es true, imprime "El usuario está autenticado"
    // - Si $autenticado es false, imprime "No autenticado"
    if ($autenticado) {
        echo 'El usuario está autenticado';
    } else {
        echo 'No autenticado';
    }}

// Llamamos la función pasando true para simular un usuario autenticado.
// (Si cambias a false, imprimirá "No autenticado".)
mensajeAutenticacion2(true);

echo '<br><br>';

echo '3. Funcion : void que imprime un valor otra forma de hacer el numeroal 2 <br>';

/**
 * Imprime en pantalla un mensaje según el estado de autenticación.
 *
 * Esta función es de tipo `void`, por lo tanto:
 * - NO devuelve ningún valor (no hay return).
 * - Su “resultado” es el texto que imprime con echo.
 *
 * @param bool $autenticado  true si el usuario está autenticado; false si no.
 * @return void
 */
function mensajeAutenticacion3(bool $autenticado): void
{
    // Usamos un operador ternario para elegir el mensaje a imprimir:
    // - Si $autenticado es true, imprime "El usuario está autenticado"
    // - Si $autenticado es false, imprime "No autenticado"
    echo $autenticado ? 'El usuario está autenticado' : 'No autenticado';
}

// Llamamos la función pasando true para simular un usuario autenticado.
// (Si cambias a false, imprimirá "No autenticado".)
mensajeAutenticacion3(false);

echo '<br><br>';


echo '4. Funcion : string que retorna un valor desde if o else <br>';

/**
 * Retorna un mensaje dependiendo del estado de autenticación.
 *
 * Nota de práctica:
 * - El tipo de retorno es una unión: string|int|float, lo que significa que esta función
 *   puede devolver cualquiera de esos tipos.
 * - En este ejemplo, realmente siempre devuelve string (porque 'Error - ' . 404 se convierte en string).
 *
 * @param bool $autenticado  true si está autenticado; false si no.
 * @return string|int|float  Mensaje de autenticación o mensaje de error.
 */
function mensajeAutenticacion4(bool $autenticado): string|int|float
{
    // Si el usuario está autenticado, retornamos un mensaje de éxito
    if ($autenticado) {
        return 'El usuario está autenticado';
    } else {
        // Si no está autenticado, retornamos un mensaje de error.
        // 'Error - ' . 404 concatena un string con un número; el resultado final es string.
        return 'Error - ' . 404;
    }
}

// Llamamos la función con false para simular un usuario NO autenticado
$mensaje3 = mensajeAutenticacion4(false);

// Imprimimos el valor retornado por la función
echo $mensaje3;


require_once __DIR__ . '/includes/footer.php';
