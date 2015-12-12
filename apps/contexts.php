<?php
/*
 * Archivo opcional, aca se definen los contextos globales.
 *
 * Por norma deben tener todos el tercer parametro en true.
 */
Context::set('debug', Settings::inDebug(), true);
Context::set('title', 'ForeverPHP - Framework MVT', true);
