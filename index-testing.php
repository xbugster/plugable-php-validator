<?php
/**
 * Index
 * Simply for testing environment and example.
 * @author Valentin Ruskevych
 */

    /**
     * Autoloader initialization
     */
require_once(dirname(__FILE__).'/Environment/SplClassLoader.php');
$autoloader = new SplClassLoader(null, dirname(__FILE__));
$autoloader->register();

    /**
     * Validation Subject Initialization
     */
$validator = new Library\Validator\Validator();
var_dump($validator);