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
$validator = new Library\Validator\ValidatorSubject();
var_dump($validator);



// new workflow as of 29.06.2014
// Validator is a PROXY to access others methods and encapsulate objects(commander)
// Validator create FieldSet object (storage for field objects).
// createField using proxy calls FieldSet createField, fields set creates field and stores within and returns field.
// this will be the configuration support by calling methods.
// error object needs to be used within validatorSubject. implements arrayAccess and countable !

// The rest of methods sets the properties on a building object
// Then get result from builder, that is the field object.
// Attach object to Validator through Proxy.
// Attach Data to Validator through Proxy
// Run the validation process through Proxy !

// validator instantiation
// validator -> set config
// validator -> set data
// validator -> run process
