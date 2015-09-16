<?php
/*
 * Archivo opcional, aca se definen los contextos globales.
 *
 * Por norma deben tener todos el tercer parametro en true.
 */
Context::set('env', (Settings::inDebug()) ? 'dev' : 'prod', true);
Context::set('title', 'ForeverPHP - Framework MVT', true);
