<?php
namespace Lorenum\PHPExceptions\HTTPExceptions;

/**
 * 509 Bandwidth Limit Exceeded (Apache bw/limited extension)
 * This status code is not specified in any RFCs. Its use is unknown.
 *
 * @package Lorenum\Ionian\Errors\HTTPExceptions
 */
Class HTTPException_509 extends HTTPException{
    public function __construct($message = 'Bandwidth limit exceeded.') {
        parent::__construct("Bandwidth Limit Exceeded", 509, $message);
    }
}