<?php
/**
 * @desc Class Error
 *       an Errors container to easier errors interaction
 *       Interface enforced methods, i dont think needs a description.
 *       As we dont need a big support right now, we will put the errors functionality
 *       within the implementation class.
 *
 *       Usage: May supply errors array, plain string or json string.
 *              May be used as native array, iteratable.
 *       @todo : break it later to abstraction layer and top layer.
 * @author Valentin Ruskevych
 *
 * @since 0.1
 */

namespace Library\Validator;


class Errors implements \ArrayAccess, \Countable, \Iterator {

    protected $_container = array();

    protected $_position = 0;

    public function __construct( $array = array() )
    {
          $this->_container = $array;
    }

    public function offsetExists( $offset )
    {
        return isset($this->_container[ $offset ]);
    }

    public function offsetGet( $offset )
    {
        return $this->offsetExists( $offset ) ? $this->_container[ $offset ] : null;
    }

    public function offsetSet( $offset, $value )
    {
        if( is_null( $offset )
        ) {
            $this->_container[] = $value;
        } else {
            $this->_container[ $offset ] = $value;
        }
    }

    public function offsetUnset( $offset )
    {
        unset( $this->_container[ $offset ] );
    }

    /**
     * @desc   count - part of Countable interface
     * @author Valentin Ruskevych
     *
     * @return int
     */
    public function count( )
    {
        return count($this->_container);
    }

    /**
     * @desc   rewind - Part of Iterator Interface methods.
     * @author Valentin Ruskevych
     *
     */
    public function rewind( )
    {
        $this->_position = 0;
    }

    public function current( )
    {
        return $this->_container[ $this->_position ];
    }

    public function key( )
    {
        return $this->_position;
    }

    public function next( )
    {
        ++$this->_position;
    }

    public function valid( )
    {
        return isset( $this->_container[ $this->_position ] );
    }

    /**
     * @desc   getMessagesAsText - get error messages as strings
     * @author Valentin Ruskevych
     *
     * @return bool|string
     */
    public function getMessagesAsText( )
    {
        return empty( $this->_container ) ? false : implode( "\n", $this->_container );
    }

    /**
     * @desc   getMessagesAsJSON - get error messages as JSON string.
     * @author Valentin Ruskevych
     *
     * @return bool|string
     */
    public function getMessagesAsJSON( )
    {
        return empty( $this->_container ) ? false : json_encode( $this->_container );
    }

    /**
     * @desc   getMessagesAsArray - get error messages as plain array
     * @author Valentin Ruskevych
     *
     * @return array|bool
     */
    public function getMessagesAsArray( )
    {
        return empty( $this->_container ) ? false : $this->_container;
    }
}