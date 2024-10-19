<?php namespace ComBank\Exceptions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 11:33 AM
 */

abstract class BaseExceptions extends \Exception
{
    protected $errorCode = 0;
    protected $errorLabel = 'BaseExceptions';

    public function __construct($message = null, $code = 0)
    {
        $message = $message ?? "Error [{$this->errorCode}]: {$this->errorLabel} - An unspecified error occurred.";
        parent::__construct($message, $code);
    }
}
