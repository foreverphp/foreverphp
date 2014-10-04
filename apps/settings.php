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
     * Motor de template
     */
    'templateEngine' => 'chameleon',

    /*
     * Configuracion de correos de los administradores, estos seran
     * utilizados para enviar las excepciones cuando se este en
     * Debug false.
     */
    'admins' => array(
        'admin@localhost',
    ),

    /*
     * Configuracion de bases de datos.
     *
     * Motores disponibles: mysql, postgresql, sqlserver
     */
    'dbs' => array(
        'default' => array(
            'engine' => 'mariadb',
            'server' => 'localhost',
            'port' => '3306',
            'database' => 'foreverphp',
            'user' => '',
            'password' => ''
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
        'location' => 'cache',
        'timeout' => 120,
        'maxEntries' => 200
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
        'password' => ''
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
     * Alias de clases para evitar usar 'use' siempre.
     */
    'aliases' => array(
        'App' => 'ForeverPHP\Core\App',
        'Context' => 'ForeverPHP\View\Context',
        'Cookie' => 'ForeverPHP\Core\Cookie',
        'CSRF' => 'ForeverPHP\Security\CSRF',
        'ExceptionManager' => 'ForeverPHP\Core\ExceptionManager',
        'File' => 'ForeverPHP\Core\Facades\File',
        'Hash' => 'ForeverPHP\Security\Hash',
        'Mail' => 'ForeverPHP\Mail\Mailer',
        'QueryRaw' => 'ForeverPHP\Database\QueryRaw',
        'Redirect' => 'ForeverPHP\Routing\Redirect',
        'Request' => 'ForeverPHP\Http\Request',
        'Response' => 'ForeverPHP\Http\Response',
        'Route' => 'ForeverPHP\Routing\Router',
        'Settings' => 'ForeverPHP\Core\Settings',
        'Session' => 'ForeverPHP\Core\Session',
        'View' => 'ForeverPHP\View\View',
    ),

    /*
     * De aqui en adelante puedes definir tu propia configuracion la cual sera
     * cargada por la libreria 'Config'.
     *
     * Modo de uso
     *
     *     Formato de configuracion:
     *
     *         $config['my_config'] = 'my config';
     *
     *     Modo de obtener la configuracion
     *
     *         Settings::get('my_config');
     */

    // Un ejemplo de configuracion propia
    'myConfig' => 'my config',
);
