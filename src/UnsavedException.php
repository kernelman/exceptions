<?php
/**
 * Created by IntelliJ IDEA.
 * User: kernel Huang
 * Email: kernelman79@gmail.com
 * Date: 2018/11/23
 * Time: 4:05 PM
 */

namespace Exceptions;


use Exception;
use Message\Message;
use Throwable;

class UnsavedException extends Exception {

    public function __construct(string $message = null, int $code = null, Throwable $previous = null) {
        parent::__construct(Message::ERR_UNSAVED . $message, $code, $previous);
    }
}
