<?php namespace ComBank\Exceptions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 1:31 PM
 */

class InvalidOverdraftFundsException extends BaseExceptions
{
    protected $errorCode = 200;
    protected $errorLabel = 'InvalidOverdraftFundsException';

    public function __construct($message = null)
    {
        $message = $message ?? "Error [{$this->errorCode}]: {$this->errorLabel} - Overdraft limit exceeded.";
        parent::__construct($message, $this->errorCode);
    }
}
