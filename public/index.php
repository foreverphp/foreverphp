<?php
/**
 * ForeverPHP - Framework MVT (Model - View - Template)
 *
 * @package     ForeverPHP
 * @author      Daniel Nuñez S. <dnunez@emarva.com>
 * @copyright   Copyright (c) 2014-2015, Emarva.
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 * @link        https://github.com/foreverphp/foreverphp
 */

/*
 * Se establece la zona horaria a UTC por defecto, para evitar
 * conflictos con la función date().
 */
date_default_timezone_set('UTC');

/*
 * Inicio la carga base
 */
require_once './../bootstrap/start.php';

if (!defined('FOREVERPHP_LOADED')) {
    die('Critical failure in ForeverPHP');
}

// Se inicia la espera de rutas
Route::run();
