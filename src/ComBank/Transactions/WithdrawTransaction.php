
<?php

namespace ComBank\Transactions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 1:22 PM
 */

use ComBank\Bank\Contracts\BankAccountInterface;
use ComBank\Exceptions\InvalidOverdraftFundsException;
use ComBank\Transactions\Contracts\BankTransactionInterface;

class WithdrawTransaction extends BaseTransaction implements BankTransactionInterface
{
    public function applyTransaction(BankAccountInterface $account): float
    {
        $newBalance = $account->getBalance() - $this->amount;
    
        // Verificar si el nuevo balance es negativo y si tiene sobregiro permitido
        if ($newBalance < 0 && !$account->getOverdraft()->isGrantOverdraftFunds($newBalance)) {
            throw new InvalidOverdraftFundsException("Fondos insuficientes para realizar el retiro, incluso con sobregiro.");
        }
    
        // Actualizar el balance si la transacción es válida
        $account->setBalance($newBalance);
        return $newBalance;
    }

    public function getTransactionInfo(): string
    {
        return "Retiro de {$this->amount} realizado.";
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}