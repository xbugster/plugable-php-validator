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

// rework -> the "field" creation needs to be made using Builder
// The Builder needs to be accessed via Proxy
// The Proxy also encapsulates the Validator
// The Builder then, on "createField", creates a new field object
// The rest of methods sets the properties on a building object
// Then get result from builder, that is the field object.
// Attach object to Validator through Proxy.
// Attach Data to Validator through Proxy
// Run the validation process through Proxy !

// validator instantiation
// validator -> set config
// validator -> set data
// validator -> run process
