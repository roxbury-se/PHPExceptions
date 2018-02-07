<?php
namespace Lorenum\PHPExceptions\HTTPExceptions;

/**
 * 507 Insufficient Storage
 * The server is unable to store the representation needed to complete the request.[4]
 *
 * @package Lorenum\Ionian\Errors\HTTPExceptions
 */
Class HTTPException_507 extends HTTPException{
    public function __construct($message = 'Insufficient storage.') {
        parent::__construct("Insufficient Storage", 507, $message);
    }
}