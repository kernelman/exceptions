<?php
/**
 * Created by IntelliJ IDEA.
 * User: kernel Huang
 * Email: kernelman79@gmail.com
 * Date: 2018/11/14
 * Time: 11:47 AM
 */

namespace Exceptions;


use Exception;
use Throwable;

/**
 * Class ConnectException
 * @package App\Exceptions
 */
class AuthorizationException extends Exception
{
    public function __construct(string $message = null, int $code = null, Throwable $previous = null) {
        parent::__construct(Message::ERR_AUTHORIZATION . $message, $code, $previous);
    }
}
