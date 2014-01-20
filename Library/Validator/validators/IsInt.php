<?php
/**
 * @desc Is Integer Validator implements SplObserver Interface.
 */

namespace Library\Validator\Validators;

class IsInt extends AbstractValidator
{
    public function isValid( $value )
    {
        return is_int( $value );
    }
} 