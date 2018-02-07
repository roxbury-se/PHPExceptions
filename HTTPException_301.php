<?php
namespace Lorenum\PHPExceptions\HTTPExceptions;

/**
 * 301 Moved Permanently
 * This and all future requests should be directed to the given URI.
 *
 * @package Lorenum\Ionian\Errors\HTTPExceptions
 */
Class HTTPException_301 extends HTTPException{
    public function __construct($message = 'This resource has been permanently moved.') {
        parent::__construct("Moved Permanently", 301, $message);
    }
}