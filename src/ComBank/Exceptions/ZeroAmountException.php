<?php namespace ComBank\Exceptions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 11:38 AM
 */

class ZeroAmountException extends BaseExceptions
{
    protected $errorCode = 101;
    protected $errorLabel = 'ZeroAmountException';

    public function __construct($message = null)
    {
        $message = $message ?? "Error [{$this->errorCode}]: {$this->errorLabel} - The transaction amount cannot be zero.";
        parent::__construct($message, $this->errorCode);
    }
}
