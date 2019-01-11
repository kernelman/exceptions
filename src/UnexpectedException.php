<?php
/**
 * Created by IntelliJ IDEA.
 * User: kernel Huang
 * Email: kernelman79@gmail.com
 * Date: 2018/11/13
 * Time: 2:11 PM
 */

namespace Exceptions;


use Exception;
use Message\Message;
use Throwable;

/**
 * Class UnexpectedException
 * @package App\Exceptions
 */
class UnexpectedException extends Exception
{
    public function __construct(string $message = null, int $code = null, Throwable $previous = null) {
        parent::__construct(Message::ERR_UNEXPECTED . $message, $code, $previous);
    }
}
