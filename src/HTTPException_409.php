<?php
namespace Lorenum\PHPExceptions\HTTPExceptions;

/**
 * 409 Conflict
 * Indicates that the request could not be processed because of conflict in the request,
 * such as an edit conflict in the case of multiple updates.
 *
 * @package Lorenum\Ionian\Errors\HTTPExceptions
 */
Class HTTPException_409 extends HTTPException{
    public function __construct($message = 'Resource conflict. Could be server side or client side.') {
        parent::__construct("Conflict", 409, $message);
    }
}