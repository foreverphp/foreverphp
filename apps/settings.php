<?php
/*
 * Archivo de configuraciones para todas las aplicaciones
 */

return array(
    /*
     * Debug
     *
     * Dejar en 'false' al pasar a produccion.
     */
    'debug' => true,

    /*
     * Configuracion de Internacionalización.
     */
    'language' => 'es-ES',      // Aun no se usa
    'timezone' => 'America/Santiago',
    'useI18N' => true,          // Aun no se usa
    'useL10N' => true,          // Aun no se usa
    'useTZ' => true,            // Aun no se usa

    /*
     * Configuracion de aplicaciones, debes agregar qui tu
     * aplicacion para ser usada en tus rutas.
     */
    'apps' => array(
        'main',
    ),

    /*
     * Indica si las Apps trabajaran con espacios de nombres.
     */
    'usingNamespaces' => false,

    /*
     * Motor de template
     */
    'templateEngine' => 'chameleon',

    /*
     * Configuracion de correos de los administradores, estos seran
     * utilizados para enviar las excepciones, errores, etc. cuando
     * se este en Debug false.
     */
    'admins' => array(
        'admin@localhost',
    ),

    /*
     * Configuracion de bases de datos.
     *
     * Motores disponibles: mariadb(mysql), mssql, postgresql, sqlsrv
     */
    'dbs' => array(
        'default' => array(
            'engine' => 'mariadb',
            'server' => 'localhost',
            'port' => '3306',
            'usingSocket' => false,
            'socket' => '/tmp/mysql.sock',
            'database' => 'foreverphp',
            'user' => '',
            'password' => '',
        )
    ),

    /*
     * Configuracion de cache.
     *
     * Motores disponibles: filecache
     *
     * timeout: tiempo de refresco del cache, esta representado en segundos.
     *
     * max_entries: es el maximo de entradas en cache, si se excede este limite
     *              se debe remover la entrada mas antigua.
     */
    'cacheEnabled' => false,

    'cache' => array(
        'engine' => 'filecache',
        'location' => ROOT_PATH . DS . 'cache',
        'timeout' => 120,
        'maxEntries' => 200,
    ),

    /*
     * Configuracion de correo.
     */
    'mail' => array(
        'server' => 'localhost',
        'port' => '25',
        'smtpAuth' => false,
        'smtpSecure' => 'none',
        'username' => '',
        'password' => '',
    ),

    /*
     * Nombre de la sesion, necesario para trabajar correctamente con sesiones.
     */
    'sessionName' => 'foreverphp',

    /*
     * Configuracion de optimizacion.
     *
     * Algunas opciones de optimizacion solo se activan al estar Debug en false.
     */
    'minifyTemplate' => true,

    /*
     * Alias de clases para evitar usar espacio de nombre completo.
     */
    'aliases' => array(
        'App' => 'ForeverPHP\Core\Facades\App',
        'Cache' => 'ForeverPHP\Core\Facades\Cache',
        'Context' => 'ForeverPHP\Core\Facades\Context',
        'Cookie' => 'ForeverPHP\Core\Facades\Cookie',
        'Hash' => 'ForeverPHP\Core\Facades\Hash',
        'Mail' => 'ForeverPHP\Core\Facades\Mail',
        'QueryKeyValue' => 'ForeverPHP\Core\Facades\QueryKeyValue',
        'QuerySQL' => 'ForeverPHP\Core\Facades\QuerySQL',
        'Redirect' => 'ForeverPHP\Core\Facades\Redirect',
        'Request' => 'ForeverPHP\Core\Facades\Request',
        'Response' => 'ForeverPHP\Core\Facades\Response',
        'Route' => 'ForeverPHP\Core\Facades\Route',
        'Settings' => 'ForeverPHP\Core\Facades\Settings',
        'Session' => 'ForeverPHP\Core\Facades\Session',
        'Storage' => 'ForeverPHP\Core\Facades\Storage',
        'View' => 'ForeverPHP\View\View',
    ),

    /*
     * Mensajes personalizados de error, para activarlos solo descomenta
     * las lineas.
     *
     * TODO: En un futuro tambien se podran usar rutas.
     */
    /*'errors' => array(
        '404' => 'errors/404.html',
        '500' => 'errors/500.html',
        '502' => 'errors/502.html',
        '503' => 'errors/503.html',
        '504' => 'errors/504.html',
    ),*/

    /*
     * De aqui en adelante puedes definir tu propia configuracion la cual sera
     * cargada por el componente 'Settings'.
     *
     * Modo de uso
     *
     *     Formato de configuracion:
     *
     *         'name' = value,
     *
     *     Modo de obtener la configuracion
     *
     *         Settings::get('myConfig');
     */

    // Un ejemplo de configuracion propia
    'myConfig' => 'my config',
);
