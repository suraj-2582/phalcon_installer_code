<?php

use \Phalcon\Di\FactoryDefault;
use \Phalcon\Autoload\Loader;
use Phalcon\Support\Debug;

$debug = new Debug();

$debug->listen();
$di = new FactoryDefault();
define('BP', dirname(__DIR__));
define('DS', '/');
define('CODE', BP . DS . 'app' . DS . 'code');
#define("TRACK_INIT", microtime(true));
error_reporting(E_ALL);

require BP . DS . 'vendor' . DS . 'autoload.php';

$maskFile = BP . '/var/umask';
$mask = file_exists($maskFile) ? octdec(file_get_contents($maskFile)) : 002;
umask($mask);

/**Register loader for modules**/
$di->set(
    'loader',
    function () {
        $loader = new Loader();
        return $loader;
    }
);

$loader = $di['loader'];
$loader->setNamespaces(
    [
        'Phalcon' => BP . DS . 'vendor' . DS . 'phalcon' . DS . 'incubator' . DS . 'Phalcon' . DS,
        'App\Core'   => CODE . DS . 'core',
        'App\Core\Middlewares'   => CODE . DS . 'core' . DS . 'Middlewares' . DS,
        'App\Core\Traits' => CODE . DS . 'core' . DS . 'Traits' . DS
    ]
);

$loader->register();

// Create an application
$application = new \App\Core\Application($di);

return $application;
