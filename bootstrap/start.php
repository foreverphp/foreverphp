<?php
/*
 * Version del framework.
 */
define('FOREVERPHP_VERSION', '0.3.0');

/*
 * Se definen las rutas bases del framework
 */

// Separador de directorio
define('DS', DIRECTORY_SEPARATOR);

// Ruta raiz
define('ROOT_PATH', dirname(dirname(__FILE__)));

// Ruta raiz de Core
define('FOREVERPHP_ROOT', dirname(__FILE__));

// Ruta raiz de las Apps
define('APPS_ROOT', ROOT_PATH . DS . 'public' . DS . 'apps');

/*
 * Incluyo el cargador de clases de Composer
 */
require ROOT_PATH . '/vendor/autoload.php';

/*
 * Incluye el cargador de clases de ForeverPHP.
 */
use ForeverPHP\Core\ClassLoader;

ClassLoader::addDirectories(ROOT_PATH);
ClassLoader::register();

/*
 * Importo las clases necesarias para el inicio.
 */
use ForeverPHP\Core\AliasLoader;
use ForeverPHP\Core\Settings;

/*
 * Se desactiva el control de errores de PHP, ahora sera el framework quien los maneje.
 */
if (Settings::inDebug()) {
    error_reporting(-1);
}

/*
 * Configura la zona horaria.
 */
date_default_timezone_set(Settings::get('timezone'));

/*
 * Carga los alias.
 * Los alias de clases se definen en el archivo de configuraciones 'settings.php'.
 */
$aliases = Settings::get('aliases');

AliasLoader::getInstance($aliases)->register();

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
