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
     * @var     array
     */
    private $_data = array();

    /**
     * @desc    Container of the value to return, false by default
     * @var     bool
     */
    private $_returnValue = false;

    /**
     * @desc Validation Configuration container
     * @var array
     */
    private $_config = array();

    /**
     * @desc    null while uninitialized, SplObjectStorage in other cases.
     * @var     object/null     \SplObjectStorage
     */
    private $_storage = null;

    /**
     * @desc    Constructor to set up a storage, if is set data to validate - set the data.
     * @author  Valentin Ruskevych
     * @param   array   $validationConfig
     */
    public function __construct( array $validationConfig = array() )
    {
        $this->_storage = new \SplObjectStorage();
        if ( 0 < sizeof( $validationConfig )
        ) {
            $this->setConfig( $validationConfig );
        }
    }

    /**
     * @desc    attach - Observer Attachment method, as dictated by SplSubject.
     * @author  Valentin Ruskevych
     *
     * @param   \SplObserver $observer
     */
    public function attach( \SplObserver $observer )
    {
        $this->_storage->attach( $observer );
    }

    /**
     * @desc    detach - Observer detachment method, as dictated by SplSubject.
     * @author  Valentin Ruskevych
     *
     * @param   \SplObserver $observer
     */
    public function detach( \SplObserver $observer )
    {
        $this->_storage->detach( $observer );
    }

    /**
     * @desc    Set Config - Public setter, to allow setting validation config after instantiation.
     *          forcing to pass array, to partially force validating single item to validator model, rather
     *          than instantiating full cycle mechanism.
     * @author  Valentin Ruskevych
     * @param   array    $validationConfig
     */
    public function setConfig( array $validationConfig = array() ) {
        $this->_config = $validationConfig;
    }

    /**
     * @desc    Config Getter - debugging and unit testing
     * @author  Valentin Ruskevych
     * @return  array
     */
    public function getConfig( ) {
        return $this->_config;
    }

    /**
     * @desc    Notify - implementation of SplSubject interface.
     *          Responsible for update()ing the observers.
     * @author  Valentin Ruskevych
     */
    public function notify()
    {

    }

    /**
     * @desc    Data Setter. Sets the data to validate
     * @param   array   $data
     * @param   string  $key
     * @author  Valentin Ruskevych
     */
    public function setData( array $data = array(), $key = null )
    {
        if( is_null( $key )
        ) {
            $this->_data = $data;
            return;
        }
        $this->_data[ $key ] = $data;
        return;
    }

    /**
     * @desc    getData - Public interface for data.
     * @author  Valentin Ruskevych
     *
     * @param   string  $key representing the key to get from data
     * @return  string/array
     */
    public function getData( $key = '*' )
    {
        if ( isset( $this->_data[ $key ] )
        ) {
            return $this->_data[ $key ];
        }

        if ( $key === '*'
        ) {
            return $this->_data;
        }
        return false;
    }

    /**
     * @desc    isValid - The chain method.
     * @author  Valentin Ruskevych
     * @return  boolean
     */
    public function isValid()
    {
        // @TODO run the validate process and return $this->_valueToReturn
        // 1. first, check that config is set
        // 2. think what is better: get precise data, or, aggregate full data (get, post, cookie, session, server)
        // 3. verify that data exists
        // 4. run the notify
        // 5. return $this->getReturnValue();
    }

    /**
     * @desc    ValueToReturn Setter.
     * @author  Valentin Ruskevych
     * @param   bool    $value
     */
    public function setReturnValue( $value )
    {
        $this->_returnValue = $value;
    }

    /**
     * @desc    Getter for ValueToReturn, the resulting value of validation process
     * @author  Valentin Ruskevych
     * @return  bool
     */
    public function getReturnValue()
    {
        return $this->_returnValue;
    }
}