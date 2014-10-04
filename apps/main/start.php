<?php
/*
 * Archivo opcional, permite hacer cargas automaticas de configuracion para la aplicacion
 */

/*
 * Por ejemplo se pueden cargar un contexto global para template haci no sera necesario usar
 * variables repetitivas para renderear templates
 */
App::addGlobalContexts('GlobalContext');
