<?php
/**
 * @desc    Is Unsigned Integer Validator implements SplObserver Interface through IsInt
 *          Class that extends Abstract - Abstract implements SplObserver.
 * @author  Valentin Ruskevych
 * @since   v0.1
 */

namespace Library\Validator\Validators;

class IsUnsignedInt extends IsInt
{
    /**
     * @desc    isValid() - Overrides parent validation method and extends its power.
     * @author  Valentin Ruskevych
     * @param   int     $value  a value to validate
     * @return  bool
     */
    static public function isValid( $value )
    {
        return ( parent::isValid( $value ) && $value >= 0 );
    }
} 