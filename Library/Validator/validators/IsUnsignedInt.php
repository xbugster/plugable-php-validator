<?php
/**
 * @desc Is Unsigned Integer Validator implements SplObserver Interface.
 */

namespace validators;

class IsUnsignedInt extends IsInt
{
    public function isValid( $value )
    {
        return ( parent::isValid( $value ) && $value >= 0 );
    }
} 