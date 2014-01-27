<?php
/**
 * Index
 * Simply for testing environment
 * @author Valentin Ruskevych
 */

require_once(dirname(__FILE__).'/Environment/SplClassLoader.php');
$autoloader = new SplClassLoader(null, dirname(__FILE__));
$autoloader->register();

$validator = new Library\Validator\Validator();
var_dump($validator);