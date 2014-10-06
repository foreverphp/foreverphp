<?php
/*
 * Archivo opcional, almacena contextos globales
 */

class GlobalContext extends Context {
    public function __construct($items = null) {
        $this->set('env', (Settings::getInstance()->inDebug()) ? 'dev' : 'prod');
        $this->set('title', 'ForeverPHP - Framework MVT');
    }
}

/*
 * Despues de definir el contexto global lo agrego a la aplicacion que se
 * ejecutara.
 */
App::addGlobalContexts('GlobalContext');
