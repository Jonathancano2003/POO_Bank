<?php

namespace ComBank\Bank;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/27/24
 * Time: 7:25 PM
 */

use ComBank\Exceptions\BankAccountException;
use ComBank\Exceptions\InvalidArgsException;
use ComBank\Exceptions\ZeroAmountException;
use ComBank\OverdraftStrategy\NoOverdraft;
use ComBank\Bank\Contracts\BackAccountInterface;
use ComBank\Bank\Contracts\BankAccountInterface;
use ComBank\Exceptions\FailedTransactionException;
use ComBank\Exceptions\InvalidOverdraftFundsException;
use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;
use ComBank\Support\Traits\AmountValidationTrait;
use ComBank\Transactions\Contracts\BankTransactionInterface;

class BankAccount implements BankAccountInterface
{
    private float $balance;
    private bool $status;
    private OverdraftInterface $overdraft;

    public function transaction(BankTransactionInterface $transaction): void
    {
        // Implementación
    }

    public function isOpen(): bool
    {
        // Implementación
    }

    public function reopenAccount(): void
    {
        // Implementación
    }

    public function closeAccount(): void
    {
        // Implementación
    }

    public function getBalance(): float
    {
        // Implementación
    }

    public function getOverdraft(): OverdraftInterface
    {
        // Implementación
    }

    public function applyOverdraft(OverdraftInterface $overdraft): void
    {
        // Implementación
    }

    public function setBalance(float $balance): void
    {
        // Implementación
    }
}
