<?php
/**
 * Created by IntelliJ IDEA.
 * User: kernel Huang
 * Email: kernelman79@gmail.com
 * Date: 2018/11/22
 * Time: 7:53 PM
 */

namespace Exceptions;

use Exception;
use Message\Message;
use Throwable;

class UnWritableException extends Exception {

    public function __construct(string $message = null, int $code = null, Throwable $previous = null) {
        parent::__construct(Message::ERR_UN_WRITABLE . $message, $code, $previous);
    }
}