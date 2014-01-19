<?php
/**
 * @desc Is Integer Validator implements SplObserver Interface.
 */

namespace validators;

class IsInt extends AbstractValidator
{
    public function isValid( $value )
    {
        return is_int( $value );
    }
} 