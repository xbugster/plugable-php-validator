<?php
/**
 * Validator
 * @desc Subject responsible for attaching observers, running observers
 *       and returning the boolean value
 * @author Valentin Ruskevych @ https://github.com/xbugster
 * @since v0.1
 */

class Validator implements \SplSubject
{
    /**
     * @desc Data to validate container
     * @var array/null
     */
    private $_data = null;

    /**
     * @desc Container of the value to return, false by default
     * @var bool
     */
    private $_returnValue = false;

    /**
     * @desc null while unitialized, SplObjectStorage in other cases.
     * @var object/null \SplObjectStorage
     */
    private $_storage = null;

    /**
     * @desc Constructor to set up a storage, if is set data to validate - set the data.
     * @param array $dataToValidate
     */
    public function __construct( array $dataToValidate = array() )
    {
        $this->_storage = new SplObjectStorage();
        // @TODO check if set dataToValidate, so set it
    }

    public function attach( \SplObserver $observer )
    {
        $this->_storage->attach( $observer );
    }

    public function detach( \SplObserver $observer )
    {
        $this->_storage->detach( $observer );
    }

    /**
     * @desc Notify - implementation of SplSubject interface.
     *       Responsible for update()ing the observers.
     */
    public function notify()
    {

    }

    /**
     * @desc Data Setter. Sets the data to validate
     * @param array $data
     */
    public function setData( array $data = array() )
    {
        $this->_data = $data;
    }

    public function isValid()
    {
        // @TODO run the validate process and return $this->_valueToReturn
    }

    /**
     * @desc ValueToReturn Setter.
     * @param boolean $value
     */
    public function setReturnValue($value)
    {
        $this->_returnValue = $value;
    }

    /**
     * @desc Getter for ValueToReturn, the resulting value of validation process
     * @return bool
     */
    public function getReturnValue()
    {
        return $this->_returnValue;
    }
}