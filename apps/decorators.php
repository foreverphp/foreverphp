<?php
/*
 * Archivo opcional, almacena los decoradores, aunque de igual forma se pueden
 * definir en tiempo de ejecucion.
 */

/*
 * Ejemplo de un decorador que valida que el usuario esta conectado.
 */
App::setDecorator('logged', function() {
    // Solo retornamos true
    return true;
});