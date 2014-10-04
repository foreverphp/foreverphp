<?php
/**
 * ForeverPHP - Framework MVT (Model - View - Template)
 *
 * @package     ForeverPHP
 * @author      Daniel Nuñez S. <dnunez@emarva.com>
 * @copyright   Copyright (c) 2014, Emarva.
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 * @link        http://www.emarva.com/foreverphp
 */

/*
 * Inicio la carga base
 */
require_once __DIR__ . '/../foreverphp/Bootstrap/Start.php';

if (!defined('FOREVERPHP_LOADED')) {
    die('Critical failure in ForeverPHP');
}

// Se inicia la espera de rutas
Route::run();
