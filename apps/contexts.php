<?php
/*
 * Archivo opcional, almacena contextos globales
 */

/*
 * Creo una clase de contexto global la cual hereda a Context.
 */
class GlobalContext extends Context {
    public function __construct($items = null) {
        $this->set('env', (Settings::inDebug()) ? 'dev' : 'prod');
        $this->set('title', 'ForeverPHP - Framework MVT');
    }
}

/*
 * Despues de definir el contexto global lo agrego a App para que este
 * disponible para la aplicacion en ejecucion.
 */
App::setGlobalContexts('GlobalContext');
