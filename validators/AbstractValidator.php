<?php
/**
 * Implementation of Template Pattern.
 * The flow is set once, within abstraction layer.
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
        $subject->setReturnValue( $this->_isValid() );
    }

    abstract protected function _isValid();
} 