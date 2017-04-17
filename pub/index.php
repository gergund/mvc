<?php
/**
 * Created by PhpStorm.
 * User: denys
 * Date: 17.04.17
 * Time: 12:23
 */

ini_set('display_errors',1);
error_reporting(E_ALL);

define('PATH', dirname(__FILE__));
define('ROOT', rtrim(PATH,'/pub'));

require_once(ROOT.'/app/Router.php');

$router = new Router();
$router->run();