<?php
namespace Lorenum\PHPExceptions\HTTPExceptions;

/**
 * 503 Service Unavailable
 * The server is currently unavailable (because it is overloaded or down for maintenance).
 * Generally, this is a temporary state.
 *
 * @package Lorenum\Ionian\Errors\HTTPExceptions
 */
Class HTTPException_503 extends HTTPException{
    public function __construct($message = 'Service unavailable. Might be due to traffic load.') {
        parent::__construct("Service Unavailable", 503, $message);
    }
}