<?php

///This file is connecting the differnet files together
//The user is forced to send there request through this file
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('SRC', ROOT . 'src' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'src' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'src' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR);
define('DATA', ROOT . 'src' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'src' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'src' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR);

$modules = [ROOT, SRC, CORE, CONTROLLER, DATA];

//getting the url so I can route the user
set_include_path( get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', false);

new Router;
