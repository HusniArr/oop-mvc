<?php 

define('ROOT', dirname(__DIR__)); // laragon/www
define('DS', DIRECTORY_SEPARATOR); // /
define('APP_URL', 'http://localhost/oop-mvc');
define('DIR', str_replace($_SERVER['DOCUMENT_ROOT'], '', ROOT.DS));// Folder name

session_start();

require_once ROOT.DS.'lib'.DS.'app.php';

new Router();