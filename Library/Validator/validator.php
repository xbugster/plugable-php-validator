<?php
/**
 * Validator
 * @desc Subject responsible for attaching observers, running observers
 *       on a set of value using predefined config and returning the boolean value
 *       based on a validation results.
 * @author Valentin Ruskevych @ https://github.com/xbugster
 * @since v0.1
 */

namespace Library\Validator;

class Validator implements \SplSubject
{
    /**
     * @desc    Data to validate container
     * @var     array/null
     */
    private $_data = null;

    /**
     * @desc    Container of the value to return, false by default
     * @var     bool
     */
    private $_returnValue = false;

    /**
     * @desc    null while unitialized, SplObjectStorage in other cases.
     * @var     object/null     \SplObjectStorage
     */
    private $_storage = null;

    /**
     * @desc    Constructor to set up a storage, if is set data to validate - set the data.
     * @param   array   $dataToValidate
     */
    public function __construct( array $dataToValidate = array() )
    {
        $this->_storage = new SplObjectStorage();
        // @TODO check if set dataToValidate, so set it
    }

    /**
     * @desc    attach - Observer Attachment method, as dictated by SplSubject.
     * @author  Mr.X
     *
     * @param   SplObserver     $observer
     */
    public function attach( \SplObserver $observer )
    {
        $this->_storage->attach( $observer );
    }

    /**
     * @desc    detach - Observer detachment method, as dictated by SplSubject.
     * @author  Mr.X
     *
     * @param   SplObserver     $observer
     */
    public function detach( \SplObserver $observer )
    {
        $this->_storage->detach( $observer );
    }

    /**
     * @desc    Notify - implementation of SplSubject interface.
     *          Responsible for update()ing the observers.
     */
    public function notify()
    {

    }

    /**
     * @desc    Data Setter. Sets the data to validate
     * @param   array   $data
     */
    public function setData( array $data = array() )
    {
        $this->_data = $data;
    }

    /**
     * @desc    getData - Public interface for data.
     * @author  Mr.X
     *
     * @param   string  $key representing the key to get from data
     * @return  string/array
     */
    public function getData($key = '*')
    {
        if ( isset( $this->_data[$key] )
        ) {
            return $this->_data[$key];
        }

        if ( $key === '*'
        ) {
            return $this->_data;
        }
        return false;
    }

    /**
     * @desc    isValid - The chain method.
     * @author  Mr.X
     *
     */
    public function isValid()
    {
        // @TODO run the validate process and return $this->_valueToReturn
    }

    /**
     * @desc    ValueToReturn Setter.
     * @param   bool    $value
     */
    public function setReturnValue($value)
    {
        $this->_returnValue = $value;
    }

    /**
     * @desc    Getter for ValueToReturn, the resulting value of validation process
     * @return  bool
     */
    public function getReturnValue()
    {
        return $this->_returnValue;
    }
}