<?php
/**
 * @desc    Implementation of Template Pattern.
 *          The flow is set once, within abstraction layer.
 * @author  Valentin Ruskevych
 * @since   v0.1
 */

namespace validators;


abstract class AbstractValidator implements \SplObserver
{
    /**
     * @desc SplSubject Interface implementation, responsible for validating and setting value to Subject.
     * @param \SplSubject $subject
     */
    public function update( \SplSubject $subject )
    {
        // todo Think about simplified access (ex. $isInt->isValid(10)):
        $subject->setReturnValue( $this->_isValid(  ) );
    }

    abstract public function isValid( $value );
} 