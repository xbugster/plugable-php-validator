<?php
/**
 * @desc    Implementation of Template Pattern.
 *          The flow is set once, within abstraction layer.
 * @author  Valentin Ruskevych
 * @since   v0.1
 */

namespace Library\Validator\Validators;


abstract class AbstractValidator implements \SplObserver
{
    /**
     * @desc    SplSubject Interface implementation, responsible for validating and setting value to Subject.
     * @author  Valentin Ruskevych
     * @param   \SplSubject $subject
     */
    public function update( \SplSubject $subject )
    {
        // todo Think about simplified access (ex. $isInt->isValid(10)):
        $subject->setReturnValue( self::isValid(  ) );
    }

    /**
     * @desc    isValid() - The function to be implemented by observer, to run the validate process
     *                      regarding each class' personal validation way.
     * @param   mixed   $value  A value to validate.
     * @return  boolean
     */
    abstract static public function isValid( $value );
} 