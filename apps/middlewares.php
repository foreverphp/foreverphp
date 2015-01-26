<?php
/*
 * Archivo opcional, almacena los middlewares.
 */

/*
 * Ejemplo de un middleware que valida que el usuario esta conectado.
 */
App::setMiddleware('logged', function() {
    // Solo retornamos true
    return true;
});