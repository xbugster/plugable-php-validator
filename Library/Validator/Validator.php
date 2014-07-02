<?php
/**
 * @desc    Server as Commander to multiple instances.
 *          1. Connection to FieldSet - the proxy to builder of fields.
 *          2. Connection to validator subject
 *          3. The rest of operation happens within commander(yet).
 * @author Mr.X
 *
 * @since : 6/29/14
 */

namespace Library\Validator;


class Validator {

    /**
     * @desc Container for proxy to field builder
     * @var null|object
     */
    private $_fieldSet = null;

    /**
     * @desc Container for ValidatorSubject.
     * @var null|object
     */
    private $_validator = null;
}