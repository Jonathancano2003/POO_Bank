<?php namespace ComBank\Exceptions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 2:20 PM
 */

class FailedTransactionException extends BaseExceptions
{
    protected $errorCode = 401;
    protected $errorLabel = 'FailedTransactionException';

    public function __construct($message = null)
    {
        $message = $message ?? "Error [{$this->errorCode}]: {$this->errorLabel} - The transaction failed.";
        parent::__construct($message, $this->errorCode);
    }
}
