<?php
/**
 * @desc    Is Integer Validator implements SplObserver Interface.
 * @author  Valentin Ruskevych
 * @since   v0.1
 */

namespace Library\Validator\Validators;

class IsInt extends AbstractValidator
{
    /**
     * @desc    isValid() - Implements abstract method and its own validation,
     *                      to validate to subject data type (INT).
     * @author  Valentin Ruskevych
     * @param   int     $value  a value to validate
     * @return  bool
     */
    public function isValid( $value )
    {
        return is_int( $value );
    }
} 