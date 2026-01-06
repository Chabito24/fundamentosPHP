<?php 

include 'includes/header.php'; //Incluye el header relacionando la carpeta "includes" seguido de el nombre del archivo "/header.php"

/**
 * Inclusión de archivos en PHP (include vs require)
 *
 * En este proyecto usamos include/require para reutilizar archivos (header, footer, plantillas, helpers, config, etc.).
 *
 * 1) require / require_once
 *    - Se usa cuando el archivo es CRÍTICO para el funcionamiento.
 *    - Si el archivo no existe o falla, PHP lanza un error fatal y DETIENE la ejecución.
 *    - require_once se usa si existe riesgo de incluir el mismo archivo más de una vez
 *      (por ejemplo, archivos con funciones, clases, configuración o constantes).
 *
 *    Ejemplo recomendado (ruta robusta):
 *      require __DIR__ . '/includes/footer.php';
 *      // o:
 *      require_once __DIR__ . '/config/app.php';
 *
 * 2) include / include_once
 *    - Se usa cuando el archivo es OPCIONAL (no debe romper toda la app si falta).
 *    - Si el archivo no existe o falla, PHP muestra un warning y CONTINÚA la ejecución.
 *    - include_once evita inclusiones duplicadas, igual que require_once.
 *
 *    Ejemplo:
 *      include __DIR__ . '/includes/banner.php';
 *
 * Nota de buenas prácticas:
 * - Preferimos rutas absolutas usando __DIR__ para evitar errores por cambios de directorio.
 * - No se deben incluir rutas construidas con datos del usuario (por seguridad).
 */
echo 'se puede usar include o reemplazar el includes por un require/header.php o en su defercto una ruta absoluta con require_once __DIR__ <br><br>';

echo 'llamar archivos externos';

require 'addfuncionesrequire.php';

iniciarapp();


include 'includes/footer.php'; //Incluye el footer  relacionando la carpeta "includes" seguido de el nombre del archivo "/footer.php"