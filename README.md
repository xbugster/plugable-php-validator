# Pluggable PHP Validator

### About

Pluggable PHP Validator is a validator mechanism based on Observer Pattern implementing various design patterns to decouple the code at its maximum.
Implementing Template Design Pattern to allow the stand-alone use of each validator model.

#### Common principles:
* Configuration-Over-Convention
* Hollywood Principle.

The validator does not force to use a library as a whole, rather allows you to pick distinct pieces (perhaps the best) of validator.
The validation methods and ways will be explained below at a later stage.

### Requirements

* PSR-0/PSR-4 Compliant Autoloader. Please refer to PHP-Fig standards on auto loading classes/libraries. (https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md)
* PHP >= 5.3

### Recommended

* Composer

### Status

The project currently is at its beginning state.

### TODO

* Adopt code for Composer
* Finish The Validation Process
* Cover Validator with UnitTest
* Code the validators
* Cover Validators Modules with UnitTests
* Rewrite the readme to add various examples
* Release
* Add the most of validators
* Support the project and keep an eye on requests.
