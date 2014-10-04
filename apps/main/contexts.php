<?php
/*
 * Archivo opcional, almacena contextos globales
 */

class GlobalContext extends Context {
    public function __construct($items = null) {
        $this->set('env', (Settings::inDebug()) ? 'dev' : 'prod');
        $this->set('title', 'ForeverPHP - Framework MVT');
    }
}
