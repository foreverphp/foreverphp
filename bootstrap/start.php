<?php
/*
 * Version del framework.
 */
define('FOREVERPHP_VERSION', '0.4.0');

/*
 * Se definen las rutas bases del framework
 */

// Separador de directorio
define('DS', DIRECTORY_SEPARATOR);

// Ruta raiz
define('ROOT_PATH', dirname(dirname(__FILE__)));

// Ruta raiz de las Apps
define('APPS_ROOT', ROOT_PATH . DS . 'apps');

/*
 * Incluye el cargador de clases de Composer
 */
require ROOT_PATH . '/vendor/autoload.php';

/*
 * Incluye el archivo con las funciones auxiliares.
 */
require ROOT_PATH . '/vendor/foreverphp/framework/src/ForeverPHP/Core/helpers.php';

/*
 * Incluye el cargador de clases de ForeverPHP.
 */
use ForeverPHP\Core\ClassLoader;

ClassLoader::addDirectories(ROOT_PATH);
ClassLoader::register();

/*
 * Se importan las clases necesarias para el inicio.
 */
use ForeverPHP\Core\AliasLoader;
use ForeverPHP\Core\Settings;

/*
 * Notificar todos los errores de PHP, si se esta en Debug.
 */
if (Settings::getInstance()->inDebug()) {
    error_reporting(-1);
}

/*
 * Deshabilita la salida de errores por pantalla.
 */
ini_set('display_errors', 0);

/*
 * Configura la zona horaria.
 */
date_default_timezone_set(Settings::getInstance()->get('timezone'));

/*
 * Carga los alias.
 * Los alias de clases se definen en el archivo de configuraciones 'settings.php'.
 */
$aliases = Settings::getInstance()->get('aliases');

AliasLoader::getInstance($aliases)->register();

/*
 * Inicializa los requerimientos de ejecución.
 */
Setup::initialize();

/*
 * Carga las rutas.
 */
$routes = APPS_ROOT . '/routes.php';

if (file_exists($routes)) {
    require $routes;
}

/*
 * Todos los objeto propios del framework deberian validad que este define
 * exista de no ser haci es un ataque y se debe matar la ejecucion.
 */
define('FOREVERPHP_LOADED', microtime(true));
